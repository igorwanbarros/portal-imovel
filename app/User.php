<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\EntityAbstract;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends EntityAbstract implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
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
