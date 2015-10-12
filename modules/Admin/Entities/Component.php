<?php namespace Modules\Admin\Entities;


class Component extends EntityAbstract {

    protected $fillable = [
      'name',
      'class_name'
    ];
    
    public function page()
    {
        return $this->hasMany('Modules\Admin\Entities\PageConfiguration');
    }

}
