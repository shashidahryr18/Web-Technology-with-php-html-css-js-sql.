<?php
class ParentClass {
    function show() {
        echo "This is parent class <br>";
    }
}

class ChildClass extends ParentClass {
    function show() {
        echo "This is child class (Overridden) <br>";
    }
}

$obj = new ChildClass();
$obj->show();
?>