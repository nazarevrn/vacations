<?php

    include "settings/init.php";

    if (empty($_SESSION) || $_SESSION['Is_auth'] == 0) {
        //print 'LogIn!';
        include 'Viewes/login_message.php'; //авторизуйтесь!
    } else {
        print 'auth!';
    }
    
    



