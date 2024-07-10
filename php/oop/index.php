<?php
spl_autoload_register(function ($class_name) {
    include 'classes/'.$class_name . '.php';
});

$person = new Person();
$person->display_person()->display_person_name('John Doe');