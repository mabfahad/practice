<?php

function largestNumber($array){
    $largestNumber = $array[0];
    foreach($array as $value){
        if($value > $largestNumber){
            $largestNumber = $value;
        }
    }
    return $largestNumber;
}

$array = [5,6,7,8,8];
echo largestNumber($array); // 8