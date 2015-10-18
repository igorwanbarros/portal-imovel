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
        'data_cadastro',
        'uf',
        'valor',
        'quartos',
        'vagas',
        'negociacao',
        'responsavel',
        'excluido',
    ];

    protected $table = 'imovel';


    public function image()
    {
        return $this->hasMany('Modules\Admin\Entities\ImovelImagem');
    }

    /**
    * Lista das Caracteristicas do Imovel
    */
    public function caracteristicas()
    {
        return $this->belongsToMany('Modules\Admin\Entities\Caracteristica', 'imovel_caracteristica');
    }

    /**
     * Formatando o atributo created_at
     * @param datetime $value
     * @return string $value
    */
    public function getCreatedAtAttribute($value)
    {
        $date = \Carbon\Carbon::parse($value);
        return $date->diffForHumans();
    }

    /**
     * Formatando o atributo updated_at
     * @param datetime $value
     * @return string $value
    */
    public function getUpdatedAtAttribute($value)
    {
        $date = \Carbon\Carbon::parse($value);
        return $date->diffForHumans();
    }
}
