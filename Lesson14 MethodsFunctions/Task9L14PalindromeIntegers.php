<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 17.2.2019 г.
 * Time: 22:10
 */


/**
 *
 */


function checkPalindrome($num){
    $n=strlen($num)-1;
    for ($i = 0; $i <$n ; $i++) {
        if(!($num[$i]==$num[$n-$i])) {
            echo "false";
            return;
        }
    }
    echo "true";
    return ;

}
$input="";
while(true){
    $input = readline();
    if($input=="END"){ break;}
    else {
        echo checkPalindrome($input) . "\n";
    }
}
