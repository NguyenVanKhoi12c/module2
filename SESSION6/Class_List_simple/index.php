<?php
include_once "ArrayList.php";

$lisInteger = new ArrayList();
$lisInteger->add(1);
$lisInteger->add(2);
$lisInteger->add(3);

echo $lisInteger->get(1);