<?php

namespace Modules\Admin\Entities;

class Pages extends EntityAbstract
{
    
    protected $fillable = [
        'name',
        'description',
        'title',
        'active',
    ];
    
    protected $table = 'pages';
    
    
}
