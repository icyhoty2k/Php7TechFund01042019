<?php
/**
 * Created by PhpStorm.
 * User: icyhoty2k
 * Date: 17.2.2019 г.
 * Time: 16:15
 */


function printChars(string $startCh, string  $endCh)
{
    $startVal = ord($startCh);
    $endVal = ord($endCh);
    if ($startVal < $endVal) {
        for ($i = $startVal+1; $i < $endVal; $i++) {
            echo chr($i) . " ";
        }
    } else {
        for ($i = $endVal+1; $i <$startVal ; $i++) {
            echo chr($i) . " ";
        }
    }
}

$x = readline();
$y = readline();

printChars($x,$y);
