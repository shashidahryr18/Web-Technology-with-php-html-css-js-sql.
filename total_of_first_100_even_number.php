<?php
$sum = 0;

for($i = 2; $i <= 200; $i += 2){
    $sum += $i;
}

echo "Total of first 100 even numbers = " . $sum;
?>