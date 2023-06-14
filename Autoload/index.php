<?php

use WECODER\Raju;

// include_once "Person.php";
// include_once "Student.php";
// include_once "Raju.php";

spl_autoload_register(function ($className) {
    // echo "<pre>";
    $filename = str_replace('WECODER\\', '', $className);
   // print_r($filename);
    include_once $filename . ".php";
});

new Person();

new Raju();

//new Student();
