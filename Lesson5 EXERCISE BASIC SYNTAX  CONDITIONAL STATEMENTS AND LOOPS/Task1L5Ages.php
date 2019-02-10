<!--
1.	Ages
Write a program that determines whether based on the given age a person is: baby, child, teenager, adult, elder. The bounders are:
•	0-2 – baby;
•	3-13 – child;
•	14-19 – teenager;
•	20-65 – adult;
•	>=66 – elder;
•	All the values are inclusive.
-->
<?php
$age =readline('What is your age');

if($age>=0 && $age <=2)
echo "baby";
if($age>=3 && $age <=13)
echo "child";
if($age>=14 && $age <=19)
echo "teenager";
if($age>=20 && $age <=65)
    echo "adult";
if($age>=66)
    echo "elder";



?>