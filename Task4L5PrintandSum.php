<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 1.2.2019 г.
 * Time: 0:38
 */
//4.	Print and Sum
//Write a program to display numbers from given start to given end and their sum. All the numbers will be integers. On the first line you will receive the start number, on the second the end number.
//Examples
//Input	Output
//5
//10	5 6 7 8 9 10
//Sum: 45
//0
//26	0 1 2 … 26
//Sum: 351
//50
//60	50 51 52 53 54 55 56 57 58 59 60
//Sum: 605

$start=readline();
$end=readline();
$sum=0;

for ($i=$start ; $i<=$end ; $i++){
    echo ' '.$i;
    $sum+=$i;
}
echo PHP_EOL;
echo "Sum: " .$sum;