<?php
function draw_stairs($n){

    $s = "";

    for($i = 0; $i < $n; ++$i)
    {
        if($i==$n - 1)
            $s .=str_repeat(" ", $i)." I";
        else
            $s.=str_repeat(" ", $i)." I\n";
    }

    return $s;
}

