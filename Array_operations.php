<?php
$array = [1, 2, 3];

array_unshift($array, 0);
array_push($array, 4);

foreach ($array as $key => $i) {
    echo $key . ":" . $i . "<br>";
}

echo "<br> New Array : ";
array_shift($array);
array_shift($array);
print_r($array);

$a = array("SHASHIDHAR", "Y R");
echo "<br>Echo(\$a): " . count($a); // count will be used

echo "<br><strong>Using Var_dump(\$a):</strong>";
var_dump($a);

echo "<br><strong>Using print_r(\$a):</strong>";
print_r($a);
?>
