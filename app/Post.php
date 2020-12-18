<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = "posts";

    // public function comments(){
    //     return $this->hasMany(Comments::class);
    // }

    protected $table = "posts";

    public function comments(){
        return $this->hasMany(com::class);
    }
    
    public function likes(){
        return $this->hasMany(like::class);
    }


    public function users(){
        return $this->belongsTo(User::class);
    }
}
