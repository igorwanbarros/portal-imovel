<?php

namespace Modules\Admin\Entities;

class PagesComponent extends EntityAbstract
{
    
    protected $fillable = [
        'component_id',
        'page_id',
    ];
    
    protected $table = 'pagescomponents';
    
}
