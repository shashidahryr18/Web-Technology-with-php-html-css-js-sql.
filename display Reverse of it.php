<?php
$num = 123456789;
$reverse = 0;

while($num > 0){
    $digit = $num % 10;
    $reverse = $reverse * 10 + $digit;
    $num = (int)($num / 10);
}

echo "Reverse number = " . $reverse;
?>