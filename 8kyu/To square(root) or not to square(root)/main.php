<?php

function squareOrSquareRoot($array){

    for($i = 0; $i < count($array); ++$i){
        if(!str_contains((string) sqrt($array[$i]), '.'))
            array_splice($array, $i , 1 ,(int) sqrt($array[$i]));
        else
            array_splice($array, $i, 1, pow($array[$i], 2));
    }
    return $array;
}

$array = [4, 3, 9, 7, 2, 1];
// $array = [10, 10201, 25, 25, 1, 1];
// $array = [1, 4, 9, 2, 25, 36];

squareOrSquareRoot($array);
