<?php
    function alphabet_number($str)
    {
        $str = strtolower($str);
        // $base--->the first low letter 'a' in ASSCI.we just want to find the location in alphabet.
        $base = 97; 
        $new_str = "";

        for ($i = 0; $i < strlen($str); $i++) {
            if (ord($str[$i]) >= 97 && ord($str[$i]) <= 122) 
            {
                $new_str .= (string)(ord($str[$i]) - $base + 1) . " ";
            }
        }

        return $new_str;
    }

    
    $str = "The narwhal bacons at midnight.";

    echo alphabet_number($str);


    
?>