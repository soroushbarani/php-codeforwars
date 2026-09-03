<?php

function solution(string $str){

    $lstring = strlen($str);  // the length of string
    for($i = 0,$j = $lstring - 1; $i < $lstring && $i < $j; ++$i , --$j){
        $temp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $temp;
    }

    return $str;
}

// $string = "hello";
// $string = "world";
$string = "Illia";

print_r(solution($string));

