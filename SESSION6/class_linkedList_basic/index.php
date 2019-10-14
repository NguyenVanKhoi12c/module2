<?php
include_once "LinkList.php";
$linkedList = new LinkList();
$linkedList->addFirstNode(4);
$linkedList->insertLast(2);
$linkedList->insertLast(3);
$linkedList->insertLast(5);
$linkedList->insertLast(6);
$linkData= $linkedList->readList();
$totalNode = $linkedList->totalNode();
echo $totalNode."<br>";
echo implode("-",$linkData);
