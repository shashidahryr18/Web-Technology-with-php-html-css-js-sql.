<?php
echo "<h2>Experiment-5: OOP Concepts in PHP</h2>";

/* 1. Student Class */
class Student {
    public $name;
    public $rollNo;

    function __construct($name, $rollNo) {
        $this->name = $name;
        $this->rollNo = $rollNo;
    }

    function display() {
        echo "Name: $this->name, Roll No: $this->rollNo <br>";
    }
}

echo "<h3>1. Student Class</h3>";
$s = new Student("Shashi", 101);
$s->display();


/* 2. Constructor & Destructor */
class Demo {
    function __construct() {
        echo "Constructor called <br>";
    }

    function __destruct() {
        echo "Destructor called <br>";
    }
}

echo "<h3>2. Constructor & Destructor</h3>";
$d = new Demo();


/* 3. Inheritance */
class Person1 {
    public $name;

    function setName($name) {
        $this->name = $name;
    }
}

class Employee extends Person1 {
    public $salary;

    function setSalary($salary) {
        $this->salary = $salary;
    }

    function display() {
        echo "Name: $this->name, Salary: $this->salary <br>";
    }
}

echo "<h3>3. Inheritance</h3>";
$e = new Employee();
$e->setName("Ravi");
$e->setSalary(30000);
$e->display();


/* 4. Method Overloading */
class Overload {
    function __call($name, $arguments) {
        if ($name == "add") {
            echo "Result: " . array_sum($arguments) . "<br>";
        }
    }
}

echo "<h3>4. Method Overloading</h3>";
$o = new Overload();
$o->add(10, 20);
$o->add(10, 20, 30);


/* 5. Method Overriding */
class ParentClass {
    function show() {
        echo "Parent class method <br>";
    }
}

class ChildClass extends ParentClass {
    function show() {
        echo "Child class method (Overridden) <br>";
    }
}

echo "<h3>5. Method Overriding</h3>";
$c = new ChildClass();
$c->show();


/* 6. Abstract Class */
abstract class Shape {
    abstract function area();
}

class Circle extends Shape {
    function area() {
        $r = 5;
        echo "Circle Area: " . (3.14 * $r * $r) . "<br>";
    }
}

class Rectangle extends Shape {
    function area() {
        $l = 4; $b = 3;
        echo "Rectangle Area: " . ($l * $b) . "<br>";
    }
}

echo "<h3>6. Abstract Class</h3>";
(new Circle())->area();
(new Rectangle())->area();


/* 7. Interface */
interface Animal {
    public function sound();
}

class Dog implements Animal {
    public function sound() {
        echo "Dog barks <br>";
    }
}

echo "<h3>7. Interface</h3>";
(new Dog())->sound();


/* 8. Encapsulation */
class Person2 {
    private $name;

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }
}

echo "<h3>8. Encapsulation</h3>";
$p = new Person2();
$p->setName("Shashi");
echo "Name: " . $p->getName() . "<br>";


/* 9. Static Members */
class Test {
    public static $count = 0;

    static function increment() {
        self::$count++;
    }
}

echo "<h3>9. Static Properties & Methods</h3>";
Test::increment();
Test::increment();
echo "Count: " . Test::$count . "<br>";


/* 10. Polymorphism */
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

echo "<h3>10. Polymorphism</h3>";
makeSound(new Cat());
makeSound(new Cow());


/* 11. Multiple Inheritance using Interfaces */
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

echo "<h3>11. Multiple Inheritance</h3>";
$obj = new C();
$obj->showA();
$obj->showB();


/* 12. BankAccount */
class BankAccount {
    private $balance = 0;

    function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited: $amount <br>";
    }

    function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn: $amount <br>";
        } else {
            echo "Insufficient balance <br>";
        }
    }

    function showBalance() {
        echo "Balance: $this->balance <br>";
    }
}

echo "<h3>12. BankAccount</h3>";
$acc = new BankAccount();
$acc->deposit(1000);
$acc->withdraw(500);
$acc->showBalance();

?>