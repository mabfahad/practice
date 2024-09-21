<?php

function isAnagram($string1, $string2){
    $string1 = str_replace(' ', '', $string1);
    $string2 = str_replace(' ', '', $string2);
    if(strlen($string1) != strlen($string2)){
        return false;
    }
    $string1 = strtolower($string1);
    $string2 = strtolower($string2);
    $string1 = str_split($string1);
    $string2 = str_split($string2);
    sort($string1);
    sort($string2);
    $string1 = implode('', $string1);
    $string2 = implode('', $string2);
    if($string1 == $string2){
        return true;
    }
    return false;
}