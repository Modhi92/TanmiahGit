<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name'];
    function Adverts(){
        return $this->hasMany(Advert::class,'types_id');
    }
}
