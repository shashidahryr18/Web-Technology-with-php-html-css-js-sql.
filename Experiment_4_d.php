<?php
function fact($num)
{
    $fact = 1;

    for($i = 1; $i <= $num; $i++)
    {
        $fact = $fact * $i;
    }

    return $fact;
}

echo "Factorial = " . fact(5);
?>