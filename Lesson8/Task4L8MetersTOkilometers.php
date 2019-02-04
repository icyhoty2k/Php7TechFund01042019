<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 4.2.2019 г.
 * Time: 22:41
 */


/**
 *4.	Convert Meters to Kilometres
You will be given an integer that will be distance in meters. Write a program that converts meters to kilometers formatted to the second decimal point.
Examples
Input	Output
1852	1.85
798	0.80

 */

$meters = intval(readline());
$kilometers = $meters/1000;
printf("%.2f",$kilometers);
