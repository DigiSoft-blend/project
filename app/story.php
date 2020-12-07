<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class story extends Model
{

    protected $table = "stories";
    
   
    public function user(){
        return $this->belongsTo(User::class);
    }
}
