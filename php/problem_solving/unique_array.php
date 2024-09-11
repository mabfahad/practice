<?php
$array = [5,6,7,8,8];

function uniqueArray($array){
    $uniqueArray = [];
    foreach($array as $value){
        if(!in_array($value, $uniqueArray)){
            $uniqueArray[] = $value;
        }
    }
    return $uniqueArray;
}

print_r(uniqueArray($array));