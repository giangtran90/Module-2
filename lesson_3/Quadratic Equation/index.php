<?php
include_once "QuadraticEquation.php";

$quadraticEquation = new QuadraticEquation(1,3,1);
echo $quadraticEquation->getDiscriminant();
echo "<br/>" . $quadraticEquation->getRoot1();
echo "<br/>" . $quadraticEquation->getRoot2();
echo "<br/>" . $quadraticEquation->getResult();
?>