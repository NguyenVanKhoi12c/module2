<?php
include_once "Circles.php";
include_once "Resizeable .php";
include_once "Rectangles.php";

//$circle = new Circles(5);
//echo $circle->get_Area();
//echo "<br>";
//$circle->resize(rand(1 ,100));
//echo $circle->get_Area();
//echo "<br>";
//echo "<br>";
//
//
//$rectangles = new Rectangles(rand(1,100),rand(1,100));
//echo $rectangles->calculateArea();

$circle = new Circles(10);
echo $circle->get_Area();
echo "<br>";
$circle->resize(rand(1, 100));
echo $circle->get_Area();
echo "<br>";

$rectangles = new Rectangles(rand(1,100),rand(1,100));
echo $rectangles->calculateArea();
