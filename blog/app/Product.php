<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

protected $guarded=[];
   public $timestamps = false;

    public function images()
    {
        return $this->morphMany('App\Image', 'imagable');
    }
}
