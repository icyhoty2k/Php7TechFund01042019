<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 11.2.2019 г.
 * Time: 0:30
 */


/**
 *Write a program which creates 2 arrays. You will be given an integer n. On the next n lines you get 2 integers. Form 2 arrays as shown below.

 */

$arrCels = readline();
$arr1=[];
$arr2=[];
for ($i=1; $i<=$arrCels;$i++){
    $elementLine=readline();
    $currElement =explode(" ",$elementLine);
    if($i % 2 ==0) {
        $arr1[$i] = $currElement[0];
        $arr2[$i] = $currElement[1];
    } else {
        $arr2[$i] = $currElement[0];
        $arr1[$i] = $currElement[1];
    }

}
foreach ($arr2 as $el){
    echo $el . " ";
}
echo PHP_EOL;
foreach ($arr1 as $el){
    echo $el . " ";
}