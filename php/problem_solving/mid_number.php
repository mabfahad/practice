<?php

function midNumber($array){
    $midIndex = floor(count($array) / 2);
    return $array[$midIndex];
}

$array = [5,6,7,8,8];
echo midNumber($array); // 7