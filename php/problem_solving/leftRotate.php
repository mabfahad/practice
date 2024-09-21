<?php

function leftRotate($array, $n){
    $n = $n % count($array);
    $array = array_merge(array_slice($array, $n), array_slice($array, 0, $n));
    return $array;
}

$array = [1,2,3,4,5];
$n = 2;
print_r(leftRotate($array, $n)); // [3,4,5,1,2]