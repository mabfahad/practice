<?php

/**
 * Interface Institution
 * When a class implements an interface, it must implement all the methods defined in the interface.
 * An interface is a contract that defines the methods that a class must implement.
 * An interface is declared using the interface keyword.
 * An interface can have constants, abstract methods, and default methods.
 * An interface cannot have properties.
 * An interface cannot have a constructor.
 * An interface cannot have a destructor.
 * An interface cannot have access modifiers.
 * An interface cannot have static methods.
 * An interface cannot have method bodies.
 * An interface cannot have variables.
 * An interface cannot have static variables.
 * An interface cannot have constants.
 * An interface cannot have private methods.
 * An interface cannot have protected methods.
 * An interface cannot have final methods.
 * An interface cannot have abstract methods.
 * An interface cannot have final classes.
 * An interface cannot have final variables.
 * An interface cannot have final constants.
 * An interface cannot have final methods.
 */
interface Institution
{
    public function set_name($name);
    public function get_name();
}

class School implements Institution
{
    private $name;
    public function set_name($name)
    {
        $this->name = $name;
    }
    public function get_name()
    {
        return $this->name;
    }
}

class College implements Institution
{
    private $name;
    public function set_name($name)
    {
        $this->name = $name;
    }
    public function get_name()
    {
        return $this->name;
    }
}

$school = new School();
$school->set_name("St. Xavier's School");
echo $school->get_name();
echo "<br>";
$college = new College();
$college->set_name("St. Xavier's College");
echo $college->get_name();