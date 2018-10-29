<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function hero()
    {
        return $this->belongsTo('App\Image','hero_id','image_id','id');
    }
}
