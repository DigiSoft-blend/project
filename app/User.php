<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
     
    public function post(){
        return $this->hasMany(Post::class);
    }


    public function usercomments(){
        return $this->hasManyThrough(
            com::class,
            Post::class,
            'user_id', //Foreign Key on Post Table
            'post_id', //Foreign Key on Comments Table
            'id', //Local key on user table
            'id' //Local key on post table
        );
    }
    
}
