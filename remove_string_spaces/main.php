<?php
    function no_space($s)
    {
        $arr = str_split($s);
        for ($i = 0; $i < count($arr); $i += 1) {
            if ($arr[$i] === " ") {
                $arr[$i] = "";
            }
        }

        return join('', $arr);
    }


    $s = "8aaaaa dddd r     ";

    echo no_space($arr);
?>