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
                array_splice($bin_digits, 0, 0, $num % 2);
                $num = (int)($num / 2);
            }

            return implode("", $bin_digits);
        }
    }

    echo "This programm adds two number then return the result in binary format.\n\n";
    $a = readline("Enter first number:");
    $b = readline("Enter second number:");
   
    echo add_binary($a, $b);
?>