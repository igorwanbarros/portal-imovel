<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Admin\Entities\Imovel;
use Modules\Admin\Entities\ImovelImagem;
use Modules\Admin\Entities\ImovelCaracteristica;
use Modules\Admin\Entities\Caracteristica;

class PullWebServiceCommand extends Command implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        
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
        dd($imoveis->data);
    }
    
    private function _createImovel($imov)
    {
        $imovel = new Imovel();
        $imovel->nome               = $imov->nome;
        $imovel->data_cadastro      = $imov->data_cadastro;
        $imovel->uf                 = $imov->uf;
        $imovel->valor              = $imov->preco_venda ?: $imov->preco_aluguel;
        $imovel->quartos            = $imov->quartos;
        $imovel->negociacao         = $imov->negociacao;
        $imovel->endereco           = $imov->endereco;
        $imovel->bairro             = $imov->bairro;
        $imovel->cidade             = $imov->cidade;
        $imovel->cep                = $imov->cep;
        $imovel->observacao         = $imov->obs;
        //$imovel->vagas              = $imov->;
        //$imovel->numero             = $imov->;
        //$imovel->responsavel        = $imov->;
        //$imovel->publicado          = $imov->;
        
        $imovel->save();
        
        return $imovel;
    }
    
    private function _caracteristicas($caracteristica, $imovelId)
    {
        foreach ($caracteristica as $carac) {
            $caracteristica         = new Caracteristica();
            $imovelCaracteristica   = new ImovelCaracteristica();

            $caracteristica->nome       = $carac->descricao;
            $caracteristica->save();

            $imovelCaracteristica->imovel_id            = $imovelId;
            $imovelCaracteristica->caracteristica_id    = $caracteristica->id;
            $imovelCaracteristica->save();
        }
    }
    
    
    private function _imagens($imagem, $imovelId)
    {
        foreach ($imagem as $f) {
            $foto               = new ImovelImagem();
            $foto->name         = $f->descricao;
            $foto->url          = $f->arquivo;
            $foto->extensao     = '';
            $foto->descricao    = $f->descricao;
            $foto->imovel_id    = $imovelId;

            $foto->save();
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
//        $args     = ['bairro' => 'mang'];
        $args     = ['id' => '680'];
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
