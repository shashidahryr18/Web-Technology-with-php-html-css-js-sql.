<?php
class Student {
    public $name;
    public $rollNo;

    function setData($name, $rollNo) {
        $this->name = $name;
        $this->rollNo = $rollNo;
    }

    function display() {
        echo "Name: $this->name <br>";
        echo "Roll No: $this->rollNo <br>";
    }
}

$s = new Student();
$s->setData("SHASHIDHAR Y R", 92400133086);
$s->display();
?>