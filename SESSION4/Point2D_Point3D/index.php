<?php
include_once "Point2D.php";
include_once "Point3D.php";
$point3d = new Point3D(1, 3, 5);
$point2d = new Point2D(20,200);
echo "<br>";
$point3d->toString();
?>