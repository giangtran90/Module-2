<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";
include_once "InterfaceResizeable.php";

use Shapes\Shape;
use Circles\Circle;
use Cylinders\Cylinder;
use Rectangles\Rectangle;
use Squares\Square;
use Resizeables\Resizeable;

$circle = new Circle('Circle_1', 3);
echo $circle->show();
echo "<br/><b>Circle Area: </b>" . $circle->calculateArea();
echo "<br/><b>Circle Perimeter: </b>" . $circle->calculatePerimeter();
echo "<br/>" . $circle->resize(50);

echo "<hr/>";
$cylinder = new Cylinder('Cylinder_1', 3, 5);
echo $cylinder->show();
echo "<br/><b>Cylinder Area: </b>" . $cylinder->calculateArea();
echo "<br/><b>Cylinder Volume: </b>" . $cylinder->calculateVolume();
echo "<br/>" . $cylinder->resize(50);

echo "<hr/>";
$rectangle = new Rectangle('Rectange_1', 5, 7);
echo $rectangle->show();
echo "<br/><b>Rectange Area: </b>" . $rectangle->calculateArea();
echo "<br/><b>Rectange Perimeter: </b>" . $rectangle->calculatePerimeter();
echo "<br/>" . $rectangle->resize(20);

echo "<hr/>";
$square = new Square('Square', 5);
echo $square->show();
echo "<br/><b>Square Area: </b>" . $square->calculateArea();
echo "<br/><b>Square Perimeter: </b>" . $square->calculatePerimeter();
echo "<br/>" . $square->resize(20);
echo "<br/>" . $square->howToColor();

?>