<?php

   $db_name = "vacations";
   $db_user = "root";
   $db_pass = "";
   $db_serv = "localhost";

   $mysql = new SafeMysql(array(
    'host'    => $db_serv,
    'user'    => $db_user,
    'pass'    => $db_pass,
    'db'      => $db_name,
    'charset' => 'utf8'
));
?>
