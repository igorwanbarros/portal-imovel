<?php namespace Modules\Admin\Entities;

class ImovelImagem extends EntityAbstract {

    protected $fillable = [
        'url',
        'name',
        'descricao',
        'imovel_id',
        'extensao',
        'excluido',
    ];

    protected $table = 'imovel_imagens';

    public function imovel()
    {
        return $this->belongsTo('Modules\Admin\Entities\Imovel');
    }
}
