<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 31.1.2019 г.
 * Time: 23:53
 */

//2.	Division
//You will be given an integer and you have to print on the console whether that number is divisible by the following numbers: 2, 3, 6, 7, 10. You should always take the bigger division. If the number is divisible by both 2 and 3 it is also divisible by 6 and you should print only the division by 6. If a number is divisible by 2 it is sometimes also divisible by 10 and you should print the division by 10. If the number is not divisible by any of the given numbers print “Not divisible”. Otherwise print "The number is divisible by {number}".
//    Examples
//Input	Output
//30	The number is divisible by 10
//15	The number is divisible by 3
//12	The number is divisible by 6
//1643	Not divisible


    $num = readline();
if($num%10 == 0)
    echo 'The number is divisible by 10';
else if ($num%7==0)
    echo'The number is divisible by 7';
else if($num %6 == 0)
    echo 'The number is divisible by 6';
else if($num %3 == 0)
    echo 'The number is divisible by 3';
else if($num %2 == 0)
    echo 'The number is divisible by 2';
else
    echo 'Not divisible';
