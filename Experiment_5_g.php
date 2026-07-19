<?php
interface Animal {
    public function sound();
}

class Dog implements Animal {
    public function sound() {
        echo "Dog barks <br>";
    }
}

$obj = new Dog();
$obj->sound();
?>