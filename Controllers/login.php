<?php

$login = $_POST['userName'];
$password = $_POST['password'];

$userFromDb = Models\tblUsers::getUser($login);
$hidePass = Models\tblUsers::hidePass('1');
print '<pre>';
print_r($hidePass);
print '<pre>';

