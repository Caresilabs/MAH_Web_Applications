<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    public function comments() 
    {
         return $this->hasMany('App\Comment');
    }

    public function tags() 
    {
        return $this->belongsToMany('App\Tag');
    }
   
}
