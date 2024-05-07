<?php

class institution
{
    public $name;
    public $location;

    public function getName()
    {
        return $this->name;
    }

    public function getLocation()
    {
        return $this->location;
    }

}

class school extends institution
{
    public function getName()
    {
        return "The is a school named " . $this->name;
    }
}

$school = new school();
$school->name = "ABC School";
$school->location = "Karachi";
echo $school->getName();
echo "<br>";
echo $school->getLocation();
