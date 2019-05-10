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
        return self::mysql()->getAll('SELECT * FROM tblUsers WHERE username = ?s', $login);
    }

    public static function hidePass($password)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randString = '';

        for ($i = 0; $i < 10; $i++) {
            $randstring .= $characters[rand(0, strlen($characters) - 1)];
        }

        return [
                'sault'         =>  hash('sha512', $randString),
                'saultedPass'   =>  hash('sha512', $password . $randString)
                ];
    }

    // public static function readSaultedPass($sault, $password)
    // {

    // }



}