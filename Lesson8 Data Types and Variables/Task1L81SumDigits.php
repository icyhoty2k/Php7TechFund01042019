<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 4.2.2019 г.
 * Time: 21:48
 */
/*
 * 1.	Sum Digits
You will be given a single integer. Your task is to find the sum of its digits.
Examples
Input	Output
245678	32
97561	28
543	12

 */

$number =intval(readline());
$sum=0;
while($number!=0){
    $currentNum=$number%10;
    $number = intval($number/10);
    $sum+=(intval($currentNum));

}
    echo $sum;
