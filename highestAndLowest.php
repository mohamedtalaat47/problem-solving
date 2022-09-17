<?php

function highAndLow($numbers)
{
    $integers = array_map('intval', explode(' ', $numbers));
    $highest = max($integers);
    $lowest = min($integers);

    echo $highest . " " . $lowest;
}

highAndLow("5 6 4 2");
