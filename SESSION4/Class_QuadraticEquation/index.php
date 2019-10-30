<?php

include_once "QuadraticEquation.php";

$result= new QuadraticEquation(4,5,6);
if ($result->getDiscriminant() >= 0){
    echo ("x1 co nghiem : ".$result->getRoot1() . "br" . "x2 co nghiem : " . $result->getRoot2());
}else {
    echo "vo nghiem";
}
