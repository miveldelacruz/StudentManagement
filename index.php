<?php
include 'vendor/autoload.php';

use delacruz\StudentManagement\Model\StudentModel;

$student = new StudentModel;
$student->Id = 202373014;
$student->fullname = "Mivel dela cruz";
$student->yearlevel = "second year";
$student->course = "BSIT";
$student->section = "A";

$student->displayInfo();





