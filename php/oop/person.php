<?php

class Person
{
    public $name;
    public $age;

    const SPECIES = "Homo Sapiens";
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet()
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

}

$person = new Person("John", 30);
echo $person->greet();
echo "<br>";
echo $person->display_constant();
echo "<br>";
$boys = new Boys("Fahad", 33);
echo $boys->greet();