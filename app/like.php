<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    //
    protected $table = "likes";

    public function post(){
        return $this->belongsTo(Post::class);
    }

}
