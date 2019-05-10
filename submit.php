<?php
include "settings/init.php";

if (empty($_POST['action'])) {
    include 'index.php';
}

switch ($_POST['action']) {
    case 'login':

        if (empty($_POST['userName'])) {
            include 'index.php';
            break;
        }

        if (empty($_POST['password'])) {
            include 'index.php';
            break;
        }

        include 'Controllers/login.php';
        break;

    case 'register':
        
        if (empty($_POST['userName'])) {
            include 'index.php';
            break;
        }

        if (empty($_POST['password'])) {
            include 'index.php';
            break;
        }
        
        if (empty($_POST['email'])) {
            include 'index.php';
            break;
        }

        if (empty($_POST['firstName'])) {
            include 'index.php';
            break;
        }

        if (empty($_POST['secondName'])) {
            include 'index.php';
            break;
        }

        include 'Controllers/register.php';
        break;

}


