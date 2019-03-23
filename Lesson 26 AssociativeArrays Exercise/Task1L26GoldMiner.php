<?php
/**
 * Created by PhpStorm.
 * User: Pos
 * Date: 23.3.2019 г.
 * Time: 15:11
 */


$inputWord = readline();
$inputNumber=readline();
$assocArray=[];
$i=0;

$founnd = "";
while($inputWord !='stop'){
if(array_key_exists($inputWord , $assocArray)==$inputWord){
   // echo $inputWord.PHP_EOL;
    $assocArray["$inputWord"]+=$inputNumber;
} else{
    $assocArray["$inputWord"]=$inputNumber;
}

    $inputWord = readline();
    $inputNumber = readline();


}

foreach ($assocArray as $item => $value) {
    echo $item." -> ".$value."K".PHP_EOL;
}