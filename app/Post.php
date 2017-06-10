<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the Post
     */
    public function category()
    {
        return $this->hasOne('App\Category')->title;
    }


    public function getCategoryTitle(){
    	return Category::where('id', $this->category_id)->first()->title;
    }
}
