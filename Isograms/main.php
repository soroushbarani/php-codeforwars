<?php
    
    function isIogram($str)
    {
        $arr = str_split(strtolower($str)); //strtolower --> because computer distinguish between lower case and upper.
        $c = 0;
        // var_dump($arr);

        if(count($arr) === 0)
        {
            return "false";
        }

        for($i = 0; $i < count($arr); $i++)
        {
            $c = array_count_values($arr)[$arr[$i]] ?? 0;
            echo $arr[$i]." Repeated ".$c."\n";
            if ($c > 1) return "false";
            $c = 0;
        }

        return "true";
    }


    // $str_1 = "Dermatoglyphics";
    $str_2 = "moOse";
    
    // echo "\n"."$str_1: ".isIogram($str_1);
    echo "\n"."$str_2: ".isIogram($str_2);

?>