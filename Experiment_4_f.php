<?php
function simple_interest($p, $r, $t)
{
    $si = ($p * $r * $t) / 100;
    return $si;
}

echo "Simple Interest = " . simple_interest(2000, 5, 2);
?>