<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet()
    {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }

    public function __destruct()
    {
        echo "Person object is destroyed.";
    }
}

$person = new Person("John", 30);
echo $person->greet();