<?php

function sum(array $a): float{
    if (count($a) == 0) {
        return 0;
    }
    
    // Return the sum of array elements.
    return array_sum($a);
}

$nums = [1, 5.2, 4, 0, -1];

echo sum($nums);
