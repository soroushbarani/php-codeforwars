<?php
// In this version we use IntChar in the if clause.

function alphabet_number($str)
{
    $str = strtolower($str);
    // $base--->the first low letter 'a' in ASSCI.we just want to find the location in alphabet.
    $base = 97;
    $new_str = "";

    for ($i = 0; $i < strlen($str); $i++) {
        if (IntlChar::isalpha($str[$i]) && (IntlChar::ispunct($str[$i]) == false)) {
            $new_str .= (string)(ord($str[$i]) - $base + 1) . " ";
        }
    }

    return $new_str;
}


$str = "The narwhal bacons at midnight.";

echo alphabet_number($str);

?>