<?php
include_once "Point.php";
include_once "Moveable.php";

$point = new Moveable(2,5,4,5);
echo $point->toString();
