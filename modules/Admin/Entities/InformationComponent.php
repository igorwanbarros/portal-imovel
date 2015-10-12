<?php namespace Modules\Admin\Entities;
   

class InformationComponent extends EntityAbstract {

    protected $fillable = [
        'content',
        'component_id',
    ];
    
    public function component()
    {
        return $this->belongsTo('\Modules\Admin\Entities\Component');
    }
}