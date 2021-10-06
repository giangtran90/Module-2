<?php

include_once "StopWatch.php";

$stopWatch = new StopWatch();
$stopWatch->start();
echo "<br/>" . $stopWatch->getStartTime();
$stopWatch->selectionSort();
$stopWatch->stop();
echo "<br/>" . $stopWatch->getStopTime();

echo "<br/>" . "<b>Total elapsed time: </b>" . $stopWatch->getElapsedTime() . " milisecond";

//echo '<b>Total Execution Time:</b> '.number_format((float) $execution_time, 10).' Mins';
//if you get weird results, use number_format((float) $execution_time, 10)
?>