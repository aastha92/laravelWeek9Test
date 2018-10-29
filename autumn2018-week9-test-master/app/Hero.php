<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heroes';
    protected $fillable = [
        'subject','description'
    ];


    public function image()
    {
        return $this->hasMany('App\Image','hero_id','image_id','id');
    }

}
