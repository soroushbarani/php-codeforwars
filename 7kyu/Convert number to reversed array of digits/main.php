<?php
    function digitize($n)
    {
        $arr = [];

        if($n === 0)
        {
            $arr[] = 0;
            return $arr;
        }

        while($n > 0)
        {

            $arr[] = $n % 10; 
            $n = (int)($n / 10);
        }

        return $arr;
    }
    
    $n = 32543;
    $arr = digitize($n);
    print_r($arr);
?>