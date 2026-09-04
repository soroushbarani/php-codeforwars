<?php

function alphabetWar($fight)
{
    $leftLetters = array('w' => 4, 'p' => 3, 'b' => 2, 's' => 1);
    $rightLetters = array('m' => 4, 'q' => 3, 'd' => 2, 'z'=> 1);

    $leftSum = 0;   // the sum of left letters.
    $rightSum = 0;  // the sum of right letters.

    for($i = 0; $i < strlen($fight); $i++){

        if(array_key_exists($fight[$i], $leftLetters)){
            echo "Left Letter : ".$fight[$i]."\n";
            $leftSum += $leftLetters[$fight[$i]];
            echo "Sum of lefts : " . $leftSum."\n";
        }
        elseif(array_key_exists($fight[$i], $rightLetters)){
            echo "Right Letter : " . $fight[$i] . "\n";
            $rightSum += $rightLetters[$fight[$i]];
            echo "Sum of Rights : ".$rightSum."\n";
        }
    }

    if($leftSum > $rightSum)
        return "Left side wins!";
    elseif($rightSum > $leftSum)
        return "Right side wins!";
    else
        return "Let's fight again!";
}

$fightString = 'zdqmwpbs';

echo alphabetWar($fightString);