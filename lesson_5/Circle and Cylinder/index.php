<?php
include_once "Circle.php";
include_once "Cylinder.php";

use Circles\Circle;
use Cylinders\Cylinder;

$circle = new Circle("Beautiful Circle", "Pink", 4);
echo $circle;
echo "<hr/>";

$cylinder = new Cylinder("Handsome Cylinder", "Blue", 5, 8);
echo $cylinder;
?>