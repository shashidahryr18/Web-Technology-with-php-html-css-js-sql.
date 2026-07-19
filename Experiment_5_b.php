<?php
class Demo {
    function __construct() {
        echo "Constructor called <br>";
    }

    function __destruct() {
        echo "Destructor called <br>";
    }
}

$obj = new Demo();
?>