<?php
/**
 * Created by PhpStorm.
 * User: icyhoty2k
 * Date: 17.2.2019 г.
 * Time: 16:00
 */
/*
 * A, E, I, O, U, and sometimes Y.
 */
function countVolews (string $words):int{
    $counter=0;
    $words=strtolower($words);
    for ($i=0 ; $i<strlen($words); $i++) {
        if ($words[$i] == "a" || $words[$i] == "e" || $words[$i] == "i" || $words[$i] == "o" || $words[$i] == "u" || $words[$i] == "y")
        {
            $counter++;
        }
    }
    return $counter;
}

echo countVolews(readline());