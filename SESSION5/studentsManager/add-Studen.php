<?php
include_once "User.php";
include_once "Student.php";
include_once "StudentsManager.php";

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $name = $_GET['name'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];
    $class = $_GET['class'];
    $role = $_GET['role'];
}

$student = new Student($name, $address, $phone, $class, $role);
$manager->addFile($student);
header('Location:display.php');


