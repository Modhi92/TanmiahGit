<?php

namespace App;
use Storage;
class helper
{
    public static function true (){

        session()->flash('messageT', 'تمة العملية بنجاح  ');

    }
    public static function false (){

        session()->flash('messageT', 'تمة العملية بنجاح ');

    }

    public static function image($file , $images ){
        storage::put('AdsTanmiah/' .  $file ,file_get_contents(($images)->getRealPath()));
    }
    public static function imageAdsTanmia($file , $images ){
        storage::put('AdsTanmiah/' .  $file ,file_get_contents(($images)->getRealPath()));
    }

}