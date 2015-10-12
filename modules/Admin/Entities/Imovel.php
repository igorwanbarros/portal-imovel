<?php

namespace Modules\Admin\Entities;

class Imovel extends EntityAbstract
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
    
    protected $table = 'imoveis';
    

    public function image()
    {
        return $this->hasMany('Modules\Admin\Entities\ImovelImagem');
    }
    
    public function getCreatedAtAttribute($value)
    {
        $date = \Carbon\Carbon::parse($value);
        return $date->format('m.d.Y H:i:s');
    }
    
    public function getUpdatedAtAttribute($value)
    {
        $date = \Carbon\Carbon::parse($value);
        return $date->format('m.d.Y H:i:s');
    }
}
