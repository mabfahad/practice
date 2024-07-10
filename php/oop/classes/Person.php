<?php

class Person
{
    public function display_person()
    {
        echo "This is a person.<br>";
        return $this;
    }

    public function display_person_name($name)
    {
        echo "This person's name is $name.";
        return $this;
    }
}
