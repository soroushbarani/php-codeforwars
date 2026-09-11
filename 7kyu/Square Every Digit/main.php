<?php

function square_digits(int $num): int{
    $numbers = str_split((string)$num);
    $num = "";

    for($i = 0; $i < count($numbers); ++$i){
        $num .= strval(pow((int) $numbers[$i], 2));
    }
    
    return (int) $num;
}


$num = 9119;

var_dump(square_digits($num));