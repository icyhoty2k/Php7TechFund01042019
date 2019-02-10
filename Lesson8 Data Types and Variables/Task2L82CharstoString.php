<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 4.2.2019 г.
 * Time: 22:31
 */


/**
 *2.	Chars to String
Write a program that reads 3 lines of input. On each line you get a single character. Combine all the characters into one string and print it on the console.
Examples
Input	Output
a
b
c	abc
%
2
o	%2o
1
5
p	15p

 */
$word="";
for ($i=0 ; $i<3; $i++){
    $chars = readline();
    $word=$word.$chars;
}
echo $word;