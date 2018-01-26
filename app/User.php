<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','last_name','Isadmin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //there is a disjoint with Leader . we implement as a one to one relationship
    public function leader()
    {
        return $this->hasOne('App\Models\Leader');
    }

    //there is a disjoint with Noneledaer. we implement as a one to one relationship
    public function noneLeader()
    {
        return $this->hasOne('App\Models\Noneleader');
    }

    //there is a disjoint with Noneledaer. we implement as a one to one relationship
    public function admin()
    {
        return $this->hasOne('App\Models\Admin');
    }

}
