<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 4.2.2019 г.
 * Time: 22:59
 */


/**
 *6.	Reversed Chars
Write a program that takes 3 lines of characters and prints them in reversed order with a space between them.
Examples
Input	Output
A
B
C	C B A
1
L
&	& L 1

 */
//when they are only 3 the easiest way is :
$c1 = readline();
$c2 = readline();
$c3 = readline();
$space=" ";
echo $c3.$space.$c2.$space.$c1.$space;