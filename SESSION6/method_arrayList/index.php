<?php
include_once "Mylist.php";

$myList = new MyList();

$myList->add(5,5);
$myList->add(4,4);
$myList->add(3,3);
$myList->add(2,2);

var_dump($myList->myList);