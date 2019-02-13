<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 13.2.2019 г.
 * Time: 3:06
 */


/**
 *Write a program, which prints all unique pairs in an array of integers whose sum is equal to a given number.
Examples
Input	         Output
1 7 6 2 19 23
8	              1 7
                  6 2

 */

$inputArr=explode(' ',readline());
$sizeArr=count($inputArr);
$searchSum = readline();
$matchesArr=[];
$couplesArr=[];
$x=0;
for ($i=0;$i<$sizeArr; $i++){
    for ($j=$i+1; $j <$sizeArr-1 ; $j++) {
        if(($inputArr[$i] + $inputArr[$j]) == $searchSum
            && !(in_array($inputArr[$i],$matchesArr)) &&
            (!in_array($inputArr[$j],$matchesArr))){
            array_push($matchesArr ,$inputArr[$i],$inputArr[$j]);

        }
}
}
#echo implode(" ",$matchesArr);
echo PHP_EOL;
foreach ($matchesArr as $item) {
    $x++;
    if($x%2==0){
        echo $item." \n";
    }else {
        echo $item . ' ';
    }
}





