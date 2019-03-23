<?php
/**
 * Created by PhpStorm.
 * User: Pos
 * Date: 23.3.2019 г.
 * Time: 15:59
 */

$input = explode(" : ",readline());

$assocArray=[];
$i=0;

$founnd = "";
while($input[0] !='end'){
if($input[0]==key_exists($input[0],$assocArray)){
    array_push($assocArray["$input[0]"],$input[1]);
}else{
    $assocArray["$input[0]"]=array($input[1]);
}

    $input = explode(" : ",readline());
}
//var_dump($assocArray);

arsort($assocArray);
foreach ($assocArray as $item => $value) {
    count($value);
    asort($value);
    echo $item.": ".count($value).PHP_EOL;
    echo "-- ".implode(PHP_EOL."-- ",($value)).PHP_EOL;
}