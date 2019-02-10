<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 11.2.2019 г.
 * Time: 0:10
 */


/**
 *2.	Common Elements
Write a program, which prints common elements in two arrays. You have to compare the elements of the second array to the elements of the first.
Examples
Input	Output
Hey hello 2 4
10 hey 4 hello	4 hello

 */
$line1 = readline();
$line2 = readline();
$arr1 = explode(" ",$line1);
$arr2 = explode(" ",$line2);
//var_dump($arr1);

    foreach ($arr2 as $currElement){
        foreach ($arr1 as $currElement2){
            if($currElement === $currElement2)
                echo $currElement." ";
        }
    }
