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
    
    public function components()
    {
        return $this->belongsToMany('Modules\Admin\Entities\Component', 'pagescomponents', 'page_id', 'component_id');
    }
}
