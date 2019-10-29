<?php
include_once '../class/Student.php';
include_once '../class/StudentManager.php';
include_once '../class/DBConnect.php';


$manager = new StudentManager();


$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$image = $_FILES['image']['name'];
$target = "../upload/" . basename($image);
$student = new Student($name, $phone,$target);
$manager->update($id, $student);
move_uploaded_file($_FILES['image']['tmp_name'], $target);
header("Location:../Create_object.php");