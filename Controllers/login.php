<?php

if (empty($_POST['userName'])) {
    include '/../index.php';
    break;
}

if (empty($_POST['password'])) {
    include '/../index.php';
    break;
}
$login = $_POST['userName'];
$password = $_POST['password'];

$userFromDb = Models\tblUsers::getUser($login);
if (!$userFromDb) {
    print 'неверный логин!';
    die;
}
//$hidePass = Models\tblUsers::hidePass('1');
$passFromDb = $userFromDb['password'];
$enteredPass = hash('sha512', $password . $userFromDb['sault']);

if ($passFromDb == $enteredPass) {
    //echo 'ok!';
    $_SESSION['Is_auth'] = 1;
    include '/../index.php';
} else {
    print 'неверный пароль!';
    include '/../index.php';
}


