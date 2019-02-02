<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 2.2.2019 г.
 * Time: 1:27
 */
/*
 *
 */

$number=readline();

for ($i=1; $i<=$number; $i++){
    for ($j=0; $j<$i; $j++) {
        echo $i." ";
    }
    echo"\n";
}