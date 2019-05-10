<?php
if (empty($_POST['userName'])) {
    include '/../index.php';
    die;
}

if (empty($_POST['password'])) {
    include '/../index.php';
    die;
}

if (empty($_POST['email'])) {
    include '/../index.php';
    die;
}

if (empty($_POST['firstName'])) {
    include '/../index.php';
    die;
}

if (empty($_POST['lastName'])) {
    include '/../index.php';
    die;
}

$login = $_POST['userName'];
$password = $_POST['password'];
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$userFromDb = Models\tblUsers::getUser($login);

if ($userFromDb) {
    print 'логин занят!';
    die;
}

Models\tblUsers::registerUser($login, $password, $email, $firstName, $lastName);
include '/../index.php';

