<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleryImg extends Model
{
    protected $fillable = [
    	'galery_id', 'img'
    ];
    public function galery()
    {
        return $this->belongsTo('App\Galery', 'galery_id');
    }
}
