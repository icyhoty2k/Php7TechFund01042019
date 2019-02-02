<?php
/*
 * 9.	*Padawan Equipment
Yoda is starting his newly created Jedi academy. So, he asked master Ivan Cho to buy the needed equipment. The number of items depends on how many students will sign up. The equipment for the Padawan contains lightsabers, belts and robes.
You will be given the amount of money Ivan Cho has, the number of students and the prices of each item. You have to help Ivan Cho calculate if the money he has is enough to buy all of the equipment, or how much more money he needs.
Because the lightsabres sometimes brake, Ivan Cho should buy 10% more, rounded up to the next integer. Also, every sixth belt is free.
Input / Constraints
The input data should be read from the console. It will consist of exactly 5 lines:
•	The amount of money Ivan Cho has – floating-point number in range [0.00…1,000.00]
•	The count of students – integer in range [0…100]
•	The price of lightsabers for a single sabre – floating-point number in range [0.00…100.00]
•	The price of robes for a single robe – floating-point number in range [0.00…100.00]
•	The price of belts for a single belt – floating-point number in range [0.00…100.00]
The input data will always be valid. There is no need to check it explicitly.

 */
$debug=1;

$money = readline();
$students = readline();
$priceLightSabres = readline();
$priceRobes = readline();
$priceBelts = readline();

$sumLightSabres=ceil($students*1.10)*$priceLightSabres;

$sumRobes=$students*$priceRobes;

$findFreebelts=intval($students/6);
echo ($debug>0 ? "": $findFreebelts."\n");
$sumBelts=($students-$findFreebelts)*$priceBelts;
$totalSum=$sumLightSabres+$sumBelts+$sumRobes;
echo ($debug>0 ? "":  "ls-".$sumLightSabres." rb-".$sumRobes."belt-".$sumBelts." frb=".$findFreebelts);
if($money >= $totalSum || $students==0 || $totalSum==0){

  echo   "The money is enough - it would cost " .sprintf('%0.2f',$totalSum)."lv.";
}else if($money<$totalSum) {

    $needed = $totalSum - $money;
    echo "Ivan Cho will need " . sprintf('%0.2f', $needed) . "lv more.";
}






