<?php

namespace Models;
use Classes\Models;

class tblUsers extends Models
{
    public static function test() 
    {
        return "OK";
    }

    public static function getUser($login)
    {
        return self::mysql()->getRow('SELECT * FROM tblUsers WHERE username = ?s', $login);
    }

    public static function hidePass($password)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        
        $randString = '0';
        for ($i = 0; $i < 10; $i++) {
            $randstring .= $characters[rand(0, strlen($characters) - 1)];
        }

        $sault = hash('sha512', $randString);

        return [
                'sault'         =>  $sault,
                'saultedPass'   =>  hash('sha512', $password . $sault)
                ];
    }

    // public static function readSaultedPass($sault, $password)
    // {

    // }



}