<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 4.2.2019 г.
 * Time: 22:34
 */


/**
 *3.	Town Info
You will be given 3 lines of input. On the first line you will be given the name of the town, on the second – the population and on the third the area. Use the correct data types and print the result in the following format:
"Town {town name} has population of {population} and area {area} square km".
Examples
Input	Output
Sofia
1286383
492	Town Sofia has population of 1286383 and area 492 square km.

 */

$townName = strval(readline());
$population = intval(readline());
$area = intval(readline());
echo "Town $townName has population of $population and area $area square km.";