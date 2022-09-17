<?php

function toCamelCase($str)
{
    if (str_contains($str, "_")) {
        $result1 = substr($str, strrpos($str, '_' )+1);

        //
        
        $result = str_replace("_","",$str);

        echo $result1;
    }
}

toCamelCase("This_is_test");
