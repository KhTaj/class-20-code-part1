<?php

if($_SERVER['REQUEST_METHOD']!=='POST'){

    echo 'Only Post Request Allowed Here';
    die();
}

include_once './vendor/autoload.php';
use Project\Controllers\Student;
$student = new Student();
       
$student->store($_POST);
header('Location:./index.php');

?>