<?php

// OOP (Object-Oriented Programming)
class Car1 {
    public $brand;

    public function startEngine() {
        echo "Engine started!<br>";
    }
}

$car1 = new Car1();
$car1->brand = "Toyota";

$car2 = new Car1();
$car2->brand = "Honda";

$car1->startEngine();
echo $car2->brand . "<br><br>";

// INHERITANCE
class AnimalBase
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }

    public function sleep()
    {
        echo $this->name . " is sleeping.<br>";
    }
}

class Cat extends AnimalBase
{
    public function meow()
    {
        echo $this->name . " says meow.<br>";
    }
}

class Dog extends AnimalBase
{
    public function bark()
    {
        echo $this->name . " says woof!<br>";
    }
}

$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat->eat();
$dog->sleep();

$cat->meow();
$dog->bark();

echo "<br>";

// POLYMORPHISM (Using Interfaces)
interface Shape
{
    public function calculateArea();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

function printArea(Shape $shape)
{
    echo "Area: " . $shape->calculateArea() . "<br>";
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

printArea($circle);
printArea($rectangle);

echo "<br>";

// ENCAPSULATION
class Car2
{
    private $model;
    private $color;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$car = new Car2("Toyota", "Blue");

echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";

$car->setColor("Red");

echo "Updated Color: " . $car->getColor() . "<br><br>";

// INTERFACE AND MULTIPLE INTERFACE IMPLEMENTATION
interface Color
{
    public function getColor();
}

class CircleWithColor implements Shape, Color
{
    private $radius;
    private $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getColor()
    {
        return $this->color;
    }
}

$circleWithColor = new CircleWithColor(5, "Blue");

echo "Area of Circle: " . $circleWithColor->calculateArea() . "<br>";
echo "Color of Circle: " . $circleWithColor->getColor() . "<br>";

// CONSTRUCTOR AND DESTRUCTOR
class Car
{
    private $brand;

    public function __construct($brand)
    {
        echo "A new car is created. <br>";
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function __destruct()
    {
        echo "The car is destroyed. <br>";
    }
}

$car = new Car("Toyota");

echo "Brand: " . $car->getBrand() . "<br>";

// ACCESS MODIFIER DEMONSTRATION
class Pet
{
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color)
    {
        $this->name  = $name;
        $this->age   = $age;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$pet = new Pet("Dog", 3, "Brown");

echo "Name: " . $pet->name . "<br>";
echo "Age: " . $pet->getAge() . "<br>";
echo "Color: " . $pet->getColor() . "<br>";

?>