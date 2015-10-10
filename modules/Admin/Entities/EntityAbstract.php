<?php
namespace Modules\Admin\Entities;

/**
 * Description of EntityAbstract
 *
 * @author igor.wanderley
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


abstract class EntityAbstract extends Model
{
    use SoftDeletes;
    
    public static function saveOrUpdate($data)
    {
        if (isset($data['id']) && $data['id'] > 0) {
            return static::find($data['id'])->fill($data)->update();
        }
        
        return static::create($data);
    }
}
