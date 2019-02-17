<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 17.2.2019 г.
 * Time: 21:32
 */


/**
 *Read two integer numbers. Calculate factorial of each number. Divide the first result by the second and print the division formatted to the second decimal point.
 */

function factorial($num){

    if ($num<=1){
        return 1;
    }
    return     factorial($num-1)*$num;

}

$x=factorial(readline());
$y=factorial(readline());
$sum=$x/$y;
//round($sum ,4);
echo sprintf("%.2f",$sum);
