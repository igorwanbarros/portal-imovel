<?php namespace Modules\Admin\Entities;
   
class ImovelImagem extends EntityAbstract {

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