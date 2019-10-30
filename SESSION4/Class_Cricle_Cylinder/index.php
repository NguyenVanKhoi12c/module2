<?php
include_once "Cricle.php";
include_once "Cylinder.php";

$Cricle = new Cricle(64);
$Cylinder = new Cylinder(5, 66);

echo "cricle Area :" . $Cricle->calculateArea() . "<br>";
echo "cricle Perimeter :" . $Cricle->calculatePerimeter() . "<br>";
echo "cylinder Area :" . $Cylinder->calculateArea() . "<br>";
echo "cylinder Perimeter :" . $Cylinder->calculatePerimeter();