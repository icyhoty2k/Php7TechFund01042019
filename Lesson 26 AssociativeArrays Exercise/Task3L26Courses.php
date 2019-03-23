<?php
/**
 * Created by PhpStorm.
 * User: Pos
 * Date: 23.3.2019 г.
 * Time: 15:59
 */

$input = explode(" : ",readline());
$assocArray=[];
while($input[0] !='end'){
if(!key_exists($input[0],$assocArray)){
    $assocArray["$input[0]"][]=$input[1];
}else{
    $assocArray["$input[0]"][]=$input[1];
}

    $input = explode(" : ",readline());
}


uksort($assocArray, function($a, $b) use ($assocArray){
    $count1=count($assocArray[$a]);
    $count2=count($assocArray[$b]);

    return $count2 <=> $count1; });



foreach ($assocArray as $item => $value) {
    asort($value);

    echo $item.": ".count($value).PHP_EOL;
    foreach ($value as $v){
        echo "-- ".$v.PHP_EOL;
    }
}