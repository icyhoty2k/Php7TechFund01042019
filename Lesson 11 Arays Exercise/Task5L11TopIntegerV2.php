<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 11.2.2019 г.
 * Time: 2:34
 */


/**
 *
 */

$input = readline();
$arr = explode(" ", $input);
$arr2 = [];
$isMax=0;
$currEl;
for ($i = 0; $i < count($arr)+$i; $i++) {
    $currEl = $arr[0];
    array_shift($arr);
if(empty($arr)){
    array_push($arr2, $currEl);
    break;
}
    $isMax = max($arr);
    if ($currEl > $isMax) {
        array_push($arr2, $currEl);
    }

}
foreach ($arr2 as $x){
    echo $x." ";
}

