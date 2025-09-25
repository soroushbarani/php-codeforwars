<?php
    function toCamelCase($str)
    {
        $arr = str_split($str);
        for ($i = 0; $i < count($arr); ++$i) {
            if ($i == 0 && (ctype_lower($arr[$i]) != true)) {
                $arr[$i] = strtoupper($arr[$i]);
            }

            if ($arr[$i] == '-' || $arr[$i] == '_') {
                strtoupper($arr[$i + 1]);
                array_splice($arr, $i, 1);
            }
        }

        return implode("", $arr);
    }


    $s = "The_stealth_warrior";
   
    echo toCamelCase($s);
    
?>