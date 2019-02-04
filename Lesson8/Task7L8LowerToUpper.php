<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 4.2.2019 г.
 * Time: 23:11
 */


/**
 *Write a program that prints whether a given character is upper-case or lower case.
Examples
Input	Output
L	upper-case
f	lower-case

 */

$inputChar = readline();
if(ctype_lower($inputChar)){
    echo "lower-case";
}else
    echo "upper-case";