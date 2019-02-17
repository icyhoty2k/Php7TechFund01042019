<?php
/**
 * Created by PhpStorm.
 * User: icyhoty2k
 * Date: 17.2.2019 г.
 * Time: 17:02
 */


function sum($a , $b){
    return $a+$b;
}

function divide($sumA, $number){
    return $sumA-$number;
}

$a = readline();
$b = readline();
$c = readline();

$sumAB=sum($a , $b);
$totalSum=divide($sumAB ,$c);
echo $totalSum;
