<?php

    include "settings/init.php";

    $a = Models\tblUsers::test();
    //print $a;

    $test = Models\tblUsers::getUser();
    print '<pre>';
    print_r($test);
    print '<pre>';
    