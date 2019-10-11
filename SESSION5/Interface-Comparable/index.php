<?php
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circles('Circle 01', 3);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('01', 4, 4, 4);
echo 'Rectangle area:' . $square->calculateArea() . '<br />';
echo 'Rectangle Perimeter: ' . $square->calculatePerimeter() . '<br />';