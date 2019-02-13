<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 11.2.2019 г.
 * Time: 22:09
 */


/**
 *Write a program that finds the longest sequence of equal elements in an array of integers. If several longest sequences exist, print the leftmost one.
 */

$input = readline();
$arr = explode(" ", $input);
$arrMatches=[];
$size=count($arr);
$currentMatches=[];
for($i=0; $i<count($arr)-1; $i++){
    if($i==count($arr)-1 && empty($arrMatches)){
       array_push($currentMatches ,$arr[0]);
       array_push($arrMatches , $currentMatches);
    }
    $count;
    $currEl=$arr[$i];
        for($j=1+$i; $j<count($arr); $j++){
            $nextEl = $arr[$j];
        if($currEl==$nextEl){

            $k=$j;


            array_push($currentMatches,$currEl);



            while($currEl==$nextEl) {
            array_push($currentMatches,$currEl);
               if(intval($k)<intval(count($arr))-1){
                $k=$k+1;

               }else {
                   break;

               }
                $nextEl=$arr[$k];

            if($currEl==$nextEl){
                $i=$k;
            }
            }
            array_push($arrMatches , $currentMatches);
            $currentMatches=[];
            break;
      #  $i=$i+$k;
        } else {

            break;
        }
    }
}

//print_r($arrMatches);
$previousValue=null;
$max=[];
foreach ($arrMatches as $findMax){
  $currentValue = count($findMax);
  if(empty($max)){
    $max=$findMax;
  }
if($previousValue > $currentValue){
    $max=$prevMax;
}
if($previousValue < $currentValue){
    $max=$findMax;
}
    $previousValue = count($findMax);
    $prevMax=$findMax;
}
echo implode(" ",$max);
