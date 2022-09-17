<?php


function checkNumber($num,$arrayOfNumbers){

    $firstNum = $num + 1;
    $secNum   = $num - 1;

    if (in_array($firstNum,$arrayOfNumbers) && in_array($secNum,$arrayOfNumbers) ) {
        echo "True => ". implode(" | ",$arrayOfNumbers) ."<br/>";
    }else{
        echo "False <br/>";
    }
}

checkNumber(10,[1, 2, 4, 10, 20, 12]);
checkNumber(3,[1, 2, 4, 10, 20, 12]);