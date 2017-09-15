<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Active_Initiative extends Model
{
    //

    protected $fillable = ['name','budget','id','Expense','Remainder','Date','sub','Specialization','manager','hours','types_id','picture'];

    function Advert(){
        return $this->belongsTo(Advert::class,'types_id');
    }
}
