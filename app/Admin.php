<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable,SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *  
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->hasOne(Model\Admin\Role::class,'id','role_id');
    }
    public function roles()
    {
        return $this->belongsToMany(Model\Admin\Role::class, 'role_users');
    }
     public function hasAccess(string $permissions) :bool
    {
        if($this->role->hasAccess($permissions)) {
            return true;
        }
        return false;
    }

    /**
     * Checks if the user belongs to role.
     */
    public function permission($permission)
    {
        return $this->roles()->where('slug', $roleSlug)->count() == 1;
    }

  

}
