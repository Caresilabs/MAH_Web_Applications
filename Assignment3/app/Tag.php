<?php

namespace DevPress;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    public function posts() 
    {
         return $this->belongsToMany('DevPress\Blogpost');
    }

    protected $casts = [
        'isSuperNerdy' => 'boolean',
    ];
}
