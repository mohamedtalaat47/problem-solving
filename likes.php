<?php

$names = ['mohamed','joe','mohamed','mohamed','joe','mohamed','mohamed','joe','mohamed'];

function likes($names)
{

    if (count($names) == 0) {
        echo "no one likes this";
    } elseif (count($names) == 1) {
        echo $names[0] . " likes this";
    } elseif (count($names) == 2) {
        echo $names[0] . " and " . $names[1] . " like this";
    } elseif (count($names) == 3) {
        echo $names[0] . ", " . $names[1] . " and " . $names[2] . " like this";
    } elseif (count($names) > 3) {
        echo $names[0] . ", " . $names[1] . " and " . count($names) - 2 . " others like this";
    }
}

likes($names);
