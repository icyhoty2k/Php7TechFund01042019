<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 10.2.2019 г.
 * Time: 23:50
 */


/**
 *  1.	Train
You will be given a count of wagons in a train n. On the next n lines you will receive how many people are going to get on that wagon. At the end print the whole train and after that the sum of the people in the train.
Examples
Input	Output
3
13
24
8	13 24 8
45

 */

$trainWagons=readline();
$train=[];
$sum=0;
for($i=0; $i<$trainWagons;$i++){
    $x = readline();
    $train[$i]=$x;
    echo $x." ";
}
echo PHP_EOL;
foreach ($train as $currWagon){
    $sum+=$currWagon;
}
echo $sum;