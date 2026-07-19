<?php
abstract class Shape {
    abstract function area();
}

class Circle extends Shape {
    private $r = 5;

    function area() {
        echo "Circle Area: " . (3.14 * $this->r * $this->r) . "<br>";
    }
}

class Rectangle extends Shape {
    private $l = 4, $b = 3;

    function area() {
        echo "Rectangle Area: " . ($this->l * $this->b) . "<br>";
    }
}

$c = new Circle();
$c->area();

$r = new Rectangle();
$r->area();
?>