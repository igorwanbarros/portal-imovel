<?php namespace Modules\Admin\Entities;
   
use Illuminate\Database\Eloquent\Model;

class ImovelImagem extends Model {

    protected $fillable = [
        'url',
        'name',
        'descricao',
        'imovel_id',
        'excluido',
    ];
    
    public function imovel()
    {
        return $this->belongsTo('Modules\Admin\Entities\Imovel');
    }
}