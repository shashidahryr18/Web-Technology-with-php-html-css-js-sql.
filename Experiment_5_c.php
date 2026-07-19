<?php
class Person {
    public $name;

    function setName($name) {
        $this->name = $name;
    }
}

class Employee extends Person {
    public $salary;

    function setSalary($salary) {
        $this->salary = $salary;
    }

    function display() {
        echo "Name: $this->name <br>";
        echo "Salary: $this->salary <br>";
    }
}

$e = new Employee();
$e->setName("SHASHIDHAR Y R");
$e->setSalary(30000);
$e->display();
?>