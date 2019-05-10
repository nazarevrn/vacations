<?php

namespace Models;
use Classes\Models;

class tblUsers extends Models
{
    public static function test() 
    {
        return "OK";
    }

    public static function getUser()
    {
        return self::mysql()->getAll('SELECT * FROM tblUsers');
    }


}