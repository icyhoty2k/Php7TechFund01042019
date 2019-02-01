<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 1.2.2019 г.
 * Time: 1:34
 */
//
//6.	Strong number
//Write a program to check if a given number is a strong number or not. A number is strong if the sum of the Factorial of each digit is equal to the number. For example 145 is a strong number, because 1! + 4! + 5! = 145. Print "yes" if the number is strong and "no" if the number is not strong.


$number = readline();
$lenght=strlen($number);
$total=0;
$x=0;
$fact=1;
//echo $lenght.PHP_EOL;
for ($i=$lenght-1 ; $i>=0 ;$i-- ){
    $fact=1;
  //  echo $number[$i].PHP_EOL;
 //  echo gmp_fact($number[$i]).PHP_EOL;
    for($x=1;$x<=$number[$i]; $x++){
        //   echo $x.PHP_EOL;

        $fact=$fact*$x;
  //      echo $fact.PHP_EOL;
    }
    $total=$total+$fact;

}
if ($total==$number)
echo 'yes';
else
    echo 'no';