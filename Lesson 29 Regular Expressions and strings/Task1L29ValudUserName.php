<?php
/**
 * Created by PhpStorm.
 * User: aware17
 * Date: 27.3.2019 г.
 * Time: 22:16
 */

$pattern="/^[A-z0-9\-_]*$/m";
$input=explode(", ",readline());
    foreach ($input as $item) {
$match=preg_match($pattern, $item );
if($match && strlen($item)<=16 && strlen($item)>=3 ){
    echo $item.PHP_EOL;
}
    }