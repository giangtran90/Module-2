<?php
    $array = [1,2,4,-6,6];
    function searchMinOfArray($array)
    {
        $min = $array[0];

        for ($i = 1; $i < count($array); $i++)
        {
            if ($array[$i] < $min)
            {
                $min = $array[$i];
            }
        }
        return $min;
    }

    $flag = searchMinOfArray($array);
    echo "Min of Array is: " . $flag;
?>