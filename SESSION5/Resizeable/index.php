<?php
include_once "Circles.php";
include_once "Resizeable .php";

$circle = new Circles(5);
echo $circle->get_Area();
echo "<br>";
$circle->resize(rand(1 ,100));
echo $circle->get_Area();
