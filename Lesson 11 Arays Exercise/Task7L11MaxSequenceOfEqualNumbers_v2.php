<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 14.2.2019 г.
 * Time: 0:44
 */


/**
 *
 */

$arr= explode(" ", readline());
$longest =[];
$count = count($arr);
$bestLen=1;
$lenght=0;
$bestSymbol=0;
for ($i = 0; $i < $count; $i++) {
    $lenght=1;
    for ($j =$i+1; $j<$count; $j++) {
        if($arr[$i] === $arr[$j]) {
            $lenght++;
            if($lenght >$bestLen){
                $bestLen = $lenght;
                $bestSymbol = $arr[$i];

            }
        }else {
            break;
        }
    }
}
//echo "bestlenght = $bestLen\nsymbol = $bestSymbol ";
echo str_repeat($bestSymbol." ",$bestLen);