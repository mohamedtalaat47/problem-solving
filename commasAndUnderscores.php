<?php

function add_commas_and_underscore($num){
    if (strlen($num) <= 3) {
        echo $num;
    }elseif (strlen($num) > 3) {
        $result = number_format($num,0,null,",");
        $result = substr_replace($result,"_",-4,1);
        echo $result;
    }
}

add_commas_and_underscore(12345678901111111);