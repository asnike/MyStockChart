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

    public function kindAllots(){
        return $this->hasMany('App\KindAllot');
    }
    public function accounts(){
        return $this->hasMany('App\Account');
    }
    public function plans(){
        return $this->hasMany('App\Plan');
    }
    public function items(){
        return $this->hasMany('App\Item');
    }
}
