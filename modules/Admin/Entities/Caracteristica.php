<?php namespace Modules\Admin\Entities;

use Modules\Admin\Entities\EntityAbstract;

class Caracteristica extends EntityAbstract {

    protected $fillable = [
        'nome'
    ];

    protected $table = 'caracteristica';

    public function imovel()
    {
        return $this->belongsToMany('Modules\Admin\Entities\Imovel');
    }

}
