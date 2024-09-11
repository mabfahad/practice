<?php
$array = [5,6,7,8,8];

function reverseArray($array){
    $reversedArray = [];
    for($i = count($array) - 1; $i >= 0; $i--){
        $reversedArray[] = $array[$i];
    }
    return $reversedArray;
}

print_r(reverseArray($array));