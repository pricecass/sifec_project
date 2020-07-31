<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'password',
        'active',
        'remember_token',
        'last_name',
        'first_name',
        'address',
        'email',
        'telephone',
        'function',
        'role_id',
        'centre_id',
    ];

     protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
        return $this->hasOne('App\Role', 'id', 'role_id');
    }

    public function centre()
    {
        return $this->belongsTo('Centre');
    }

    /**
     * verifie si l'utilisateur a un role attribué
     */
    public function checkIfUserHasRole($need_role)
    {
        return strtolower($need_role) == strtolower($this->role->slug) ? true : null;
    }

    /**
     *
     */
    public function hasRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $need_role)
            {
                if ($this->checkIfUserHasRole($need_role)) {
                    return true;
                }
            }   
        }
        else {
            return $this->checkIfUserHasRole($roles);
        }
        return  false;
    }
    
}
