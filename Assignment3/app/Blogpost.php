<?php

namespace DevPress;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    public function comments() 
    {
         return $this->hasMany('DevPress\Comment');
    }

    public function tags() 
    {
        return $this->belongsToMany('DevPress\Tag');
    }
   
}
