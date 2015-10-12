<?php namespace Modules\Admin\Entities;


class Component extends EntityAbstract {

    protected $fillable = [
      'name',
      'class_name'
    ];
    
    public function information()
    {
        return $this->hasOne('\Modules\Admin\Entities\InformationComponent');
    }

}
