<?php

function getFirstLetters($text){
    if (str_word_count($text) > 3) {
        echo "the text is too long!";
    }elseif (str_word_count($text) == 1){
        echo $text;
    }else{
        $words = explode(" ",$text);
        foreach ($words as $word) {
            echo strtoupper($word[0]);
        }
    }

    echo "<br>";
}

getFirstLetters("mohamed ahmed mohamed");
getFirstLetters("Bruce Wayne");
getFirstLetters("Peter Parker some thing");
getFirstLetters("Peter");