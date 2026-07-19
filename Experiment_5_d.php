<?php
class Overload {
    function __call($name, $arguments) {
        if ($name == "add") {
            if (count($arguments) == 2) {
                echo $arguments[0] + $arguments[1];
            } elseif (count($arguments) == 3) {
                echo $arguments[0] + $arguments[1] + $arguments[2];
            }
        }
    }
}

$obj = new Overload();
$obj->add(10, 20);
echo "<br>";
$obj->add(10, 20, 30);
?>