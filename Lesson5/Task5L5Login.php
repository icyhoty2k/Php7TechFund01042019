<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 1.2.2019 г.
 * Time: 0:54
 */
//5.	Login
//You will be given a string representing a username. The password will be that username reversed. Until you receive the correct password print on the console "Incorrect password. Try again.". When you receive the correct password print "User {username} logged in." However on the fourth try if the password is still not correct print "User {username} blocked!" and end the program.

$user = readline();
$lenght = strlen($user);
$passwd = "";
for ($i = $lenght - 1; $i >= 0; $i--) {
    $passwd = $passwd . $user[$i];

}
//echo "".$passwd;
$x = 0;
do {
    $tempPass = readline();
    $x += 1;
    if($x ==4 ){
        echo "User $user blocked!";
        return;
    }
    if (($tempPass != $passwd)) {
        echo "Incorrect password. Try again." . PHP_EOL;
    } else
        echo "User $user logged in.";
} while (($tempPass != $passwd) && ($x < 5));





