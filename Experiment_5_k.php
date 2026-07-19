<?php
interface A {
    public function showA();
}

interface B {
    public function showB();
}

class C implements A, B {
    public function showA() {
        echo "Interface A <br>";
    }

    public function showB() {
        echo "Interface B <br>";
    }
}

$obj = new C();
$obj->showA();
$obj->showB();
?>