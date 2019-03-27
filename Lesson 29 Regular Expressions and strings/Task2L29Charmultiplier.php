<?php
/**
 * Created by PhpStorm.
 * User: aware17
 * Date: 28.3.2019 г.
 * Time: 0:41
 */

//
//echo ord("a");
//echo chr(97);

$input=explode(" ", readline());
$lenght1=strlen($input[0]);
$lenght2=strlen($input[1]);
$sum=0;
$i=0;
//echo $lenght1.' '.$lenght2.PHP_EOL;
if($lenght1 <= $lenght2){
 $i=$lenght1;
 for ($currPos=$i; $currPos<$lenght2; $currPos++){
     $sum=$sum+ord($input[1][$currPos]);
 }
} else {
    $i = $lenght2;
    for ($currPos = $i; $currPos < $lenght1; $currPos++) {
        $sum = $sum + ord($input[0][$currPos]);
    }
}
for ($currPos=0; $currPos<$i; $currPos++){
    $sum+=ord($input[0][$currPos])*ord($input[1][$currPos]);
}
echo $sum;