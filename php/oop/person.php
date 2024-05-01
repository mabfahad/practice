<?php

class Person
{
    public $name;
    public $age;

    const SPECIES = "Homo Sapiens";
    public function __construct( $name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function greet()
    {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }

    public function display_constant() {
        return Person::SPECIES;
    }

    public function __destruct()
    {
        unset($this->name);
        unset($this->age);
    }
}

class Boys extends Person
{
    function greet()
    {
        return "Hello there! This is {$this->name} and my age is {$this->age}.";
    }

    function conversation()
    {
        return "How are you {$this->name}?";
    }

}

$person = new Person("John", 30);
echo $person->greet();
echo "<br>";
echo $person->display_constant();
echo "<br>";
$boys = new Boys("Fahad", 33);
echo $boys->greet();
echo $boys->conversation();
//Polymorphism a system where a class is extended and the method in the child class can override the method of the parent class and the child class can create new methods which are not existed in the parent class.