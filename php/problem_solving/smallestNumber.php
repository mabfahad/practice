<?php

function smallestNumber($array) {
    $smallestNumber = $array[0];
    foreach($array as $value) {
        if($value < $smallestNumber) {
            $smallestNumber = $value;
        }
    }
    return $smallestNumber;
}

$array = [5,6,7,8,8];
echo smallestNumber($array); // 5