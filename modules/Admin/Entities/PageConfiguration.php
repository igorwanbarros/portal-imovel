<?php namespace Modules\Admin\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageConfiguration extends Model {
    use SoftDeletes;
    
    protected $fillable = [
        'titulo_pagina',
        'page_name',
        'ativo',
        'autor',
        'group_menu'
    ];
    
    protected $table = 'page_configuration';
    
//    protected $dates = ['deleted_at'];

}