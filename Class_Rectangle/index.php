<?php
include_once "Rectangle.php";

$width = 55;
$height = 100;

$rectangle = new Rectangle($width,$height);

echo $rectangle->display();