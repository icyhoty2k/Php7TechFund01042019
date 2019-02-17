<?php
/**
 * Created by PhpStorm.
 * User: icyhoty2k
 * Date: 17.2.2019 г.
 * Time: 18:13
 */



function findMiddle(string $character){
    $found=0;
    if(strlen($character) % 2 == 0){
        $found =$character[(strlen($character)/2)-1].$character[strlen($character)/2];
    } else
        $found=$character[intval(floor((strlen($character)/2))) ];
    return $found;
}

echo findMiddle(readline());