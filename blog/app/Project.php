<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   public $timestamps = false;
   protected $guarded=[];

    public function images()
    {
        return $this->morphMany('App\Image', 'imagable');
    }
}
