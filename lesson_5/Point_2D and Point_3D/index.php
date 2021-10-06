<?php
include_once "Point2D.php";
include_once "Point3D.php";

use Point_2D\Point2D;
use Point_3D\Point3D;

$point2D = new Point2D();
$point2D->setX(2);
$point2D->setY(4);
$point2D->setXY($point2D->getX(), $point2D->getY());

$point2D->setX(9);
$point2D->setY(3);
$point2D->setXY($point2D->getX(), $point2D->getY());

$point2D->setX(10);
$point2D->setY(4);
$point2D->setXY($point2D->getX(), $point2D->getY());

echo $point2D;

echo "<hr/>";

$point3D = new Point3D();
$point3D->setX(2);
$point3D->setY(4);
$point3D->setZ(5);
$point3D->setXYZ($point3D->getX(), $point3D->getY(), $point3D->getZ());

$point3D->setX(4);
$point3D->setY(6);
$point3D->setZ(8);
$point3D->setXYZ($point3D->getX(), $point3D->getY(), $point3D->getZ());

$point3D->setX(4);
$point3D->setY(6);
$point3D->setZ(8);
$point3D->setXYZ($point3D->getX(), $point3D->getY(), $point3D->getZ());
// echo "<pre>";
// print_r($point3D->getXYZ());

echo $point3D;
