<?php

$person=array("Ivan"=>12 , "Georgi"=>15);
foreach ($person as $p =>$qwe ){
    echo $qwe ." - ".$p."\n" ;
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo PHP_EOL;
    echo "Key=" . $x . ", Value=" . $x_value;

}

///**
// * Created by PhpStorm.
// * User: G750js
// * Date: 2.2.2019 г.
// * Time: 1:52
// */
//
//
////$num=0.8;
////    $num1=0.8;
////        $sum=$num-$num1;
////        echo $sum;
////
//
//        $myvar1 ="a5";
//echo print_var_name("a5");
//$grab=$GLOBALS;
//
//echo $test;
//$varrr = "test"=>"da";
//
////
//      //  var_dump($myvar1);
//
//
//        function print_var_name($var) {
//            foreach($GLOBALS as $var_name => $value) {
//                if ($value === $var) {
//                    return $var_name;
//                }
//            }
//
//            return false;
//        }