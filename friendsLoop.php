<?php

$myfriends = ["Ahmed", 20, 10, "Sayed", "Ali", "Shaimaa", "ibrahim", "Noha"];
$myfriends2 = ["hamdy", 20, 10, "Sayed", "Mohamed", "Bruce", "ibrahim", "Noha"];

function filterNames($arr){

    foreach ($arr as $value) {
        if (is_string($value) && preg_match('~^\p{Lu}~u', $value)) {
            echo "- ". $value ."<br>";
        }
    }
    echo "<hr>";
}

filterNames($myfriends);
filterNames($myfriends2);