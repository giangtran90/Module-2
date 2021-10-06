<?php

include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 8);
$circleTwo = new ComparableCircle('circleTwo', 2);
$circleThree = new ComparableCircle('circleThree', 2);

$test = $circleTwo->compareTo($circleThree);
echo('Comparable: <br>');
echo $test;