<?php
function avg($arr)
{
    $sum = 0;
    $n = count($arr);

    for($i = 0; $i < $n; $i++)
    {
        $sum = $sum + $arr[$i];
    }

    return $sum / $n;
}

$numbers = array(10, 20, 30, 40, 50);

echo "Average = " . avg($numbers);
?>