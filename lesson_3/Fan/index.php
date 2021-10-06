<?php
include_once "Fan.php";

$fan = new Fan();
echo $fan . "<br/>" ;

$fan->setSpeed(MEDIUM);
$fan->setColor("Red");
$fan->setOn(true);
$fan->setRadius(6);
echo $fan . "<br/>" ; 
?>