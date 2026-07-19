<?php
function prime($num)
{
    $count = 0;

    for($i = 1; $i <= $num; $i++)
    {
        if($num % $i == 0)
        {
            $count++;
        }
    }

    if($count == 2)
        echo "Number is Prime";
    else
        echo "Number is Not Prime";
}

prime(7);
?>