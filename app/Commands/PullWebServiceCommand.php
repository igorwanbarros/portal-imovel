<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Bus\Queueable;
use Modules\Admin\Entities\Imovel;
use Modules\Admin\Entities\ImovelImagem;
use Modules\Admin\Entities\ImovelCaracteristica;
use Modules\Admin\Entities\Caracteristica;

class PullWebServiceCommand extends Command implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels, Queueable;

    protected $countUpdate;
    protected $countCreate;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        if ($this->attempts() > 1) {
            return false;
        }
        
        $this->countCreate = [
            'imovel'            => 0,
            'caracteristica'    => 0,
            'imagem'            => 0,
        ];
        
        $this->countUpdate = [
            'imovel'            => 0,
            'caracteristica'    => 0,
            'imagem'            => 0,
        ];
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        $file = $this->_connectWebService();
        
        $imoveis = json_decode($file);
        
        foreach ($imoveis->data->imovel as $imov) {
            $imovel = $this->_createImovel($imov);
            
            if (is_array($imov->caracteristica)) {
                $this->_caracteristicas($imov->caracteristica, $imovel->id);
            }
            
            if (is_array($imov->foto)) {
                $this->_imagens($imov->foto, $imovel->id);
            }
        }
        
        return [
            'create' => $this->countCreate,
            'update' => $this->countUpdate
        ];
    }
    
    private function _createImovel($imov)
    {
        //consulta se o imovel ja foi criado pelo webservice_id
        $exists = (new Imovel())->where('webservice_id','=', $imov->id)->first();
        $imovel = new Imovel();
        
            $imovel->valor         = $imov->preco_venda == "0.00" ? $imov->preco_aluguel : $imov->preco_venda;
            $imovel->data_cadastro = $imov->data_cadastro;
            $imovel->endereco      = $imov->endereco;
            $imovel->bairro        = $imov->bairro;
            $imovel->cidade        = $imov->cidade;
            $imovel->cep           = $imov->cep;
            $imovel->uf            = $imov->uf;
            
        //salva o imovel caso nao exista ainda no banco
        if ($exists == null) {
            $imovel->nome          = $imov->nome ?: 'Nao informado';
            $imovel->quartos       = $imov->quartos;
            $imovel->negociacao    = $imov->preco_venda ? 'venda' : 'aluguel';
            $imovel->observacao    = $imov->obs;
            $imovel->webservice_id = $imov->id;
            $imovel->valor         = $imov->preco_venda == "0.00" ? $imov->preco_aluguel : $imov->preco_venda;
            
            $imovel->save();
            $this->countCreate['imovel']++;
        } else {//ou atualiza as informacoes
            $imovel->id = $exists->id;
            
            $imovel->saveOrUpdate($imovel->toArray());
            $this->countUpdate['imovel']++;
        }
        
        return $imovel;
    }
    
    private function _caracteristicas($caracteristica, $imovelId)
    {
        foreach ($caracteristica as $carac) {
            $temp                   = (new Caracteristica())->where('nome', '=', $carac->descricao)->first();
            $imovelCaracteristica   = new ImovelCaracteristica();
            $caracteristicaId       = null;
            
            if ($temp == null){
                $newCarac               = new Caracteristica();
                $newCarac->nome         = $carac->descricao;
                $newCarac->save();
                $caracteristicaId       = $newCarac->id;
            } else {
                $caracteristicaId       = $temp->id;
            }
            
            $exists = $imovelCaracteristica->where('imovel_id', '=', $imovelId)
                        ->where('caracteristica_id', '=', $caracteristicaId)->first();
            
            if ($exists == null) {
                $imovelCaracteristica->imovel_id            = $imovelId;
                $imovelCaracteristica->caracteristica_id    = $caracteristicaId;
                $imovelCaracteristica->save();
                
                $this->countCreate['caracteristica']++;
            }
            
            $this->countUpdate['caracteristica']++;
        }
    }
    
    
    private function _imagens($imagem, $imovelId)
    {
        foreach ($imagem as $f) {
            $exists             = (new ImovelImagem())
                                    ->where('imovel_id', '=', $imovelId)
                                    ->where('url', '=', env('WEBSERVICE_PATH_IMG', '') . $f->arquivo)->first();
            
            $foto               = new ImovelImagem();
            
            if ($exists == null && $f->arquivo != '') {
                $foto->url          = env('WEBSERVICE_PATH_IMG','') . $f->arquivo;
                $foto->extensao     = '';
                $foto->imovel_id    = $imovelId;
                $foto->name         = $f->descricao ?: 'Não informado';
                $foto->descricao    = $foto->name;

                $foto->save();
                
                $this->countUpdate['imagem']++;
            }
            $this->countUpdate['imagem']++;
        }
    }
    
    private function _connectWebService()
    {
        $cliente    = (new \QueryAuth\Factory)->newClient();
        
        $key        = env('WEBSERVICE_KEY','KEY');
        $secret     = env('WEBSERVICE_SECRET','secret');
        $method     = env('WEBSERVICE_METHOD','METHOD');
        $host       = env('WEBSERVICE_HOST','HOST');
        $path       = env('WEBSERVICE_PATH','PATH');
        
        $args       = [];
        $params     = $cliente->getSignedRequestParams($key, $secret, $method, $host, $path, $args);
        
        $postdata   = http_build_query($params);
        $options    = array(
            'http' => array(
                'method'  => $method,
                'header'  => "Content-type: application/x-www-form-urlencoded",
                'content' => $postdata
            )
        );
        
        $context = stream_context_create($options);
        return file_get_contents('http://'.$host.$path, false, $context);
    }
}
