<?php

function twoSum($array, $target){
    $result = [];
    for($i = 0; $i < count($array); $i++){
        for($j = $i + 1; $j < count($array); $j++){
            if($array[$i] + $array[$j] == $target){
                $result[] = $i;
                $result[] = $j;
            }
        }
    }
    return $result;
}

$array = [2,7,11,15];
$target = 9;
print_r(twoSum($array, $target)); // [0,1]
