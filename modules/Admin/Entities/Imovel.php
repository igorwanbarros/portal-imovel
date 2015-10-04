<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
        'nome',
        'endereco',
        'bairro',
        'cidade',
        'cep',
        'numero',
        'responsavel',
        'excluido',
    ];
    
    public function image()
    {
        return $this->hasMany('Modules\Admin\Entities\ImovelImagem')->where('excluido', '=', 0);
    }
}
