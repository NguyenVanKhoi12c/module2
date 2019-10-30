<?php
include_once "Rectangle.php";

$width = 123123;
$height = 43243;

$rectangle = new Rectangle($width,$height);
echo $rectangle->display();