<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function parent(){
        return $this->belongsTo('App\Category', 'parent_id');
    }
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
