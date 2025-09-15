<?php
      
    $str = "1,2,3,4,5";

    $arr = explode(',', $str);
    
    $len = count($arr);


    unset($arr[0]);
    unset($arr[$len - 1]);

    if(count($arr) == 0)
    {
        echo "This array is empty";
    }
    else
    {
        echo join(",",$arr);
    }
?>