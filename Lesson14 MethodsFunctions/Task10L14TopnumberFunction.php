<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 17.2.2019 г.
 * Time: 22:42
 */


/**
 *
 */


function findTopNumber($number){
    $sum=0;
    $x=0;
    for ($i = 1; $i < $number; $i++) {
        $x=$i;
        $sum=0;
        $arr=[];
        $currNum=null;
        $found=false;
     while($x>0){

     array_push($arr,$x%10);
         $sum=array_sum($arr);

    // echo $sum."-$i-sum\n";
     $x= intval(($x / 10));
     if($x<=0){
     foreach ($arr as $elemen){
         if ($elemen%2!=0){
             $found=true;
         }
     }
     if($sum%8==0 && $found){
         echo $i."\n";
         break;}

     }
     }
    }
}

echo findTopNumber(readline());