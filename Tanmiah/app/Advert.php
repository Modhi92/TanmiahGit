<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $fillable = ['picture' , 'active_initiatives_id' ,'types_id' ,'name'];

    function active_Initiative(){
        return $this->belongsTo(Active_Initiative::class , 'active_initiatives_id');
    }
}
