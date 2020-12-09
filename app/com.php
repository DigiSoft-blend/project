<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class com extends Model
{
    //
    protected $table = "coms";

    public function post(){
        return $this->belongsTo(Post::class);
    }

    
}
