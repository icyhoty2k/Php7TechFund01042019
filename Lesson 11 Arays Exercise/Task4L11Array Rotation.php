<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 11.2.2019 г.
 * Time: 0:48
 */


/**
 *Write a program that receives an array and number of rotations you have to perform (first element goes at the end) Print the resulting array.
 */

$arr = readline();
$arr1 = explode(" ",$arr);
$rotate = readline();



for($i=0; $i<$rotate; $i++ ){
   $x= $arr1[0];
    array_shift($arr1);
array_push($arr1 , $x);

}
foreach ($arr1 as $c){
    echo $c." ";
}

