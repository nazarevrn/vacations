<?php
namespace Classes;

class Models
{

    public function __construct()
    {
        global $mysql;
        $this->mysql = $mysql;
    }

    /**
     * Наследование методов SafeMysql
     * @return \SafeMysql
     */
    public static function mysql()
    {
        $class = new Models();
        return $class->mysql;
    }

}

