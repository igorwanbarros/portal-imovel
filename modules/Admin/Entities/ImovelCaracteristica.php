<?php namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\EntityAbstract;

class ImovelCaracteristica extends EntityAbstract {

    protected $fillable = [
        'imovel_id',
		'caracteristica_id'
    ];

    protected $table = 'imovel_caracteristica';

}
