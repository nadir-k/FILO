<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\LostItem;
use App\Requests;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** 
     * Relationship between User and LostItem
     * User has many LostItems
     **/ 

    public function lost_items(){
        return $this->hasMany('App\LostItem');
    }

    /** 
     * Relationship between User and Requests
     * User has many Requests
     **/ 
    public function requests(){
        return $this->hasMany('App\Requests');
    }
}
