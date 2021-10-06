<?php
include_once "Rectangle.php";
$width = 20;
$height = 10;

$rectangle = new Rectangle($width, $height);

echo ("Width: " . $rectangle->width);// 0utput:20
echo "<br/>";
echo ("Height: " . $rectangle->height);// 0utput:10
echo "<br/>";

$rectangle->height = 30;
$rectangle->width = 20;

echo ("Width: " . $rectangle->height); // 0utput: 30
echo "<br/>";
echo ("Height: " . $rectangle->width); // 0utput: 20
echo "<br/>";
echo ("Perimeter: " . $rectangle->getPerimeter()); // 0utput: 100
echo ("Area: " . $rectangle->getArea()); // Output: 600
echo ("Your Rectangle: ". $rectangle->display());
?>
