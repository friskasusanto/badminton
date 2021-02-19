<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $fillable = [
    	'name'
    ];
    public function galeryImg()
    {
        return $this->hasMany('App\GaleryImg', 'galery_id')->limit(1);
    }
}
