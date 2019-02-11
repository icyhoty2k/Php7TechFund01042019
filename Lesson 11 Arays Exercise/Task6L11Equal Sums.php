<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 11.2.2019 г.
 * Time: 3:03
 */


/**
 *
 */


$input = readline();
$sum1=0;
$sum2=0;
$x=0;
$arr=explode(" ",$input);
if(count($arr)<=1){
    echo "0";
    $x=1;

}
for($i=0;$i<count($arr)+$i;$i++){

    $sum1+=$arr[0];
array_shift($arr);
if(!empty($arr)){
    $sum2=array_sum($arr)-($arr[0]);
}
    if($sum2 == $sum1){
        $x=1;
        echo $i+1;
            break;
    }

}
if($x!=1){
    echo "no";
}


