<?php
include_once "Shape.php";
include_once "Triangle.php";

$tamgiac1 = new Triangle();
echo $tamgiac1->getToString()."<br>";

$tamgiac1->setInputSide123(4,6,8);
$tamgiac1->setColor("Yellow");
echo $tamgiac1->getToString();