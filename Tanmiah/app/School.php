<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    protected $fillable = ['id','name','phone_number','Supervisor','manager'];
}
