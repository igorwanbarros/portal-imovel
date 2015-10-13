<?php

namespace Modules\Admin\Entities;

class Component extends EntityAbstract
{
    
    protected $fillable = [
        'name',
        'class',
        'description',
    ];
    
    protected $table = 'components';
    
    public function pages()
    {
        return $this->belongsToMany('Modules\Admin\Entities\Pages','pagescomponents', 'component_id', 'page_id');
    }
    
}
