<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 11.2.2019 г.
 * Time: 1:57
 */


/**
 * 5.	Top Integers
Write a program to find all the top integers in an array. A top integer is an integer which is bigger than all the elements to its right.

 */

$input = readline();
$arr = explode(" ", $input);
$arr2=[];
$isMax;
for ($i=0; $i<count($arr)+$i; $i++){
    $currEl=$arr[0];
    $isMax=$currEl;
    for ($j=1; $j<count($arr);$j++){
        if($currEl <= $arr[$j] ){
            $isMax = $arr[$j]+1;
            break;
        }
    }
    if($currEl==$isMax){
        array_push($arr2,$currEl);}

    array_shift($arr);
}

foreach ($arr2 as $x){
    echo $x." ";
}