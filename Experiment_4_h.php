<?php

function add($a, $b)
{
    return $a + $b;
}

function sub($a, $b)
{
    return $a - $b;
}

function mul($a, $b)
{
    return $a * $b;
}

function div($a, $b)
{
    return $a / $b;
}

echo "Addition = " . add(10,5) . "<br>";
echo "Subtraction = " . sub(10,5) . "<br>";
echo "Multiplication = " . mul(10,5) . "<br>";
echo "Division = " . div(10,5);

?>