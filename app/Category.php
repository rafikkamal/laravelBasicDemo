<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the Post
     */
    public function post()
    {
        return $this->hasMany('App\Post');
    }
}
/*
