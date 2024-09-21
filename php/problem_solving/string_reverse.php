<?php

function stringReverse($string){
    $reversedString = '';
    for($i = strlen($string) - 1; $i >= 0; $i--){
        $reversedString .= $string[$i];
    }
    return $reversedString;
}

echo stringReverse('hello'); // olleh