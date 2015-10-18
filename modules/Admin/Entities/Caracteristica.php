<?php namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model {

    protected $fillable = [
        'nome'
    ];

    protected $table = 'caracteristica';

    public function imovel()
    {
        return $this->belongsToMany('Modules\Admin\Entities\Imovel');
    }

}
