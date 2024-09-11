<?php

$string = "madam";
function isPalindrom($string){
    $reversedString = "";
    for($i = strlen($string) - 1; $i >= 0; $i--){
        $reversedString .= $string[$i];
    }
    return $reversedString == $string;
}

echo isPalindrom($string) ? "Yes" : "No"; // Yes