<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 17.2.2019 г.
 * Time: 21:21
 */


/**
 *
 */


function printNumMatrix(int $num){
    for ($i = 0; $i < $num; $i++) {
        for ($j = 0; $j < $num; $j++) {
            echo $num." ";
        }
        echo PHP_EOL;
}
}


printNumMatrix(readline());