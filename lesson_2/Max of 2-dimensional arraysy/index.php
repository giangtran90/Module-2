<?php
$array = [
    [1,4,-5,7,9],
    [10,5,2,4]
];

function maxOfArray($array)
{
    $max = $array[0][0];
    for ($i = 0; $i < count($array); $i++) 
    {
        for ($j = 0; $j < count($array[$i]); $j++) 
        {
            if ($array[$i][$j] > $max)
            {
                $max = $array[$i][$j];
            }
        }
    }
    return $max;
}

$flag = maxOfArray($array);
echo "<pre>"; 
print_r($array);
echo "</pre>";
echo "<br/>" . "Max of array: " . $flag;
?>