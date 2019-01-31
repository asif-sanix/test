<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    //
  


     public function posts(){
    	return $this->belongsToMany('App\Model\Admin\Post','category_posts')->paginate(5);
    }

     public function getRouteKeyName(){
        return 'slug';
    }
}
