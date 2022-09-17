<?php

function reverse($w)
    {
        if (strlen($w) >= 5) {
            return strrev($w);
        } else {
            return $w;
        }
    }

function spinWords(string $str)
{

    

    $arr = explode(" ", $str);
    $arrResult = array_map("reverse", $arr);

    $resultStr = implode(" ", $arrResult);
    echo $resultStr;
}

spinWords("this is first test");
spinWords("this is second test");