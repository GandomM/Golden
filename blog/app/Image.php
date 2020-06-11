<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;

    protected $guarded=[];

     public function imagable()
    {
        return $this->morphTo();
    }
}
