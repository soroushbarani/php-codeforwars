<?php
    function add_binary($a, $b)
    {
        // Add two number then return the result in binary form.

        $num = $a + $b;

        if ($num == 0)
        {
            return "0";
        }
        else
        {
            $bin_digits = [];

            while($num > 0)
            {
                echo $num % 2 ."\n";
            // $bin_digits[] = $num % 2;
                array_splice($bin_digits, 0, 0, $num % 2);
                $num = (int)($num / 2);
            }

            // $bin_digits[] = $num; // for get the last digit.

            // print_r($bin_digits);
            return implode("", $bin_digits);
        }
    }

    $a = 51;
    $b = 12;
   
    echo add_binary($a, $b);
?>