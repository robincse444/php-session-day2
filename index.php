<?php
//session_start();





require_once 'vendor/autoload.php';
use App\classes\Student;

//$home = new Home();
//$home->index();

$student = new Student();
$student->mamage();