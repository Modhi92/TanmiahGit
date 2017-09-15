<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['name','phone_number','data_contract','end_contract','Specialization'];

    public static function findBy($conditions=[])
    {
        return Employee::where($conditions);
    }

}
