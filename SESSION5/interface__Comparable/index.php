<?php
include_once "Comparable.php";
include_once "Circle.php";
include_once "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);

$test=($circleOne->compareTo($circleTwo));
echo $test;
