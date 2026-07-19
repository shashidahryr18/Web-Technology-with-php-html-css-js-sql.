<?php
class Cat {
    function sound() {
        echo "Cat meows <br>";
    }
}

class Cow {
    function sound() {
        echo "Cow moos <br>";
    }
}

function makeSound($obj) {
    $obj->sound();
}

makeSound(new Cat());
makeSound(new Cow());
?>