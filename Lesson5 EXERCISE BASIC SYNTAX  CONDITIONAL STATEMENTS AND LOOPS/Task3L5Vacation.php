<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 1.2.2019 г.
 * Time: 0:13
 */

$personsNumber=readline();
$personsType=readline();
$day=readline();
$total=0;
//
//There are also discounts based on some conditions:
//•	Students – if the group is bigger than or equal to 30 people you should reduce the total price by 15%
//•	Business – if the group is bigger than or equal to  100 people 10 of them can stay for free
//                                                                                            •	Regular – if the group is bigger than or equal 10 and less than or equal to 20 reduce the total price by 5%

//
//Friday	Saturday	Sunday
//Students	8.45	9.80	10.46
//Business	10.90	15.60	16
//Regular	15	20	22.50
if($personsType == "Students" && $day == "Friday") {$total=$personsNumber*8.45;}
else if ($personsType == "Students" && $day == "Saturday") {$total=$personsNumber*9.80;}
else if ($personsType == "Students" && $day == "Sunday") {$total=$personsNumber*10.46;}
if ($personsType == "Students" && $personsNumber >=30) {$total=$total*0.85;}


//===================== Business =================================

if ($personsType == "Business" && $personsNumber >=100) {$personsNumber-=10;}
if($personsType == "Business" && $day == "Friday") {$total=$personsNumber*10.90;}
else if ($personsType == "Business" && $day == "Saturday") {$total=$personsNumber*15.60;}
else if ($personsType == "Business" && $day == "Sunday") {$total=$personsNumber*16.00;}

//===================== Regular =================================

if($personsType == "Regular" && $day == "Friday") {$total=$personsNumber*15.00;}
else if ($personsType == "Regular" && $day == "Saturday") {$total=$personsNumber*20.00;}
else if ($personsType == "Regular" && $day == "Sunday") {$total=$personsNumber*22.50;}
if ($personsType == "Regular" && $personsNumber >=10 && $personsNumber <=20) {$total=$total*0.95;}


echo 'Total price: '.sprintf('%0.2f', $total);

