<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 4.2.2019 г.
 * Time: 22:46
 */


/**
 *5.	Pounds to Dollars
Write a program that converts British pounds(real number) to dollars formatted to 3th decimal point.
1 British Pound = 1.31 Dollars

 */

$pounds = floatval(readline());
$USD=round($pounds*1.31,3);
printf("%.3f", $USD);