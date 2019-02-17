<?php
/**
 * Created by PhpStorm.
 * User: icyhoty2k
 * Date: 17.2.2019 г.
 * Time: 16:35
 */


/*
 * •	6 – 10 characters (inclusive)
•	Consists only of letters and digits
•	Have at least 2 digits
If a password is valid print “Password is valid”. If it is not valid, for every unfulfilled rule print a message:
•	"Password must be between 6 and 10 characters"
•	"Password must consist only of letters and digits"
•	"Password must have at least 2 digits"

 */

function checkLenghtPwd(string $pwd): bool
{
    if (strlen($pwd) < 6 || strlen($pwd) > 10) {
        echo "Password must be between 6 and 10 characters \n";
        return false;
    }
    return true;
}

function checkChars(string $pwd):bool
{
    for ($i = 0; $i < strlen($pwd); $i++) {
        if (!ctype_digit($pwd[$i]) && !ctype_alpha($pwd[$i])) {
            echo "Password must consist only of letters and digits \n";
            return false;
        }
    }
    return true;
}
function checkCountMinDigits($pwd){
    $count=0;
    for ($i = 0; $i < strlen($pwd); $i++) {
        if (ctype_digit($pwd[$i])) {
            $count++;
        }
    }
    if($count < 2){
        echo "Password must have at least 2 digits \n";
        return false;
    }
    return true;
}


$passwordInput = readline();
$x=checkLenghtPwd($passwordInput);
$y=checkChars($passwordInput);
$z=checkCountMinDigits($passwordInput);
if($x && $y && $z){
    echo "Password is valid";
}