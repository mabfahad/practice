<?php

//check if a number is a fibonacci number
function isFibonacci($number){
    $a = 0;
    $b = 1;
    while($a < $number){
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
    return $a == $number;
}

echo isFibonacci(21) ? "Yes" : "No"; // Yes