<?php
include "settings/init.php";

if (empty($_POST['action'])) {
    include 'index.php';
}

switch ($_POST['action']) {
    
    case 'login':
        include 'Controllers/login.php';
        break;

    case 'register':
        include 'Controllers/register.php';
        break;

}


