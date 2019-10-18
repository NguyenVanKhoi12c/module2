<?php
include_once "../class/DBConnect.php";
include_once "../class/Student.php";
include_once "../class/StudentManager.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$image = $_FILES['image']['name'];
$target = "../upload/" . basename($image);
$studentObj = new Student($name,$phone,$target);
$manager = new StudentManager();
$manager->insert($studentObj);
move_uploaded_file($_FILES['image']['tmp_name'], $target);

header("location:../index.php");