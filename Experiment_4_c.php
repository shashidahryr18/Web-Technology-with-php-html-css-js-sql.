<?php
function evenodd($num)
{
    if($num % 2 == 0)
        return "Even Number";
    else
        return "Odd Number";
}

echo evenodd(8);
?>