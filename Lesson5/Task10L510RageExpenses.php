<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 4.2.2019 г.
 * Time: 23:23
 */


/**
 *Input / Constraints
•	On the first input line - lost games count – integer in the range [0, 1000].
•	On the second line – headset price - floating point number in range [0, 1000].
•	On the third line – mouse price - floating point number in range [0, 1000].
•	On the fourth line – keyboard price - floating point number in range [0, 1000].
•	On the fifth line – display price - floating point number in range [0, 1000].
Output
•	As output you must print Pesho`s total expenses: "Rage expenses: {expenses} lv."
•	Allowed working time / memory: 100ms / 16MB.

 */

$lostgames = intval(readline());
$headsetprice = floatval(readline());
$mouseprice = floatval(readline());
$keyboardprice = floatval(readline());
$displayprice = floatval(readline());
$expenses=0;
$sum=floor(($lostgames/2))*$headsetprice;
$sum2=floor(($lostgames/3))*$mouseprice;
$sum3=floor(($lostgames/6))*$keyboardprice;
$sum4=floor(($lostgames/12))*$displayprice;
$expenses = $sum+$sum2+$sum3+$sum4;
printf("Rage expenses: %.2f lv.", $expenses);