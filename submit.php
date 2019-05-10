<?php

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
}


