<?php
//find closest number to 0
function closestNumber($array){
    $closestNumber = $array[0];
    foreach($array as $value){
        if(abs($value) < abs($closestNumber)){
            $closestNumber = $value;
        }
    }
    return $closestNumber;
}

$array = [2,-1,1];
echo closestNumber($array); // 1
