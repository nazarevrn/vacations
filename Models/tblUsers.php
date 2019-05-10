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

    public static function registerUser($login, $password, $email, $firstName, $lastName)
    {
        $saultAndPass = self::hidePass($password);
        //return $saultAndPass;
        $sql = 'INSERT INTO tblUsers SET username = ?s, password = ?s, sault = ?s, email = ?s, first_name = ?s, last_name = ?s, created = NOW()';
        self::mysql()->query($sql, $login, $saultAndPass['saultedPass'], $saultAndPass['sault'], $email, $firstName, $lastName);
    }



}