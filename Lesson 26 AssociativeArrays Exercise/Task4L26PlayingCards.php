<?php
/**
 * Created by PhpStorm.
 * User: aware17
 * Date: 24.3.2019 г.
 * Time: 21:02
 */


$input = explode(":",readline());
$players=[];
$cards=[];
$firstNum=0;
while($input[0]!="JOKER"){

$cards=explode(",",$input[1]);
$cardsUnique=array_unique($cards);
foreach ($cardsUnique as $card){

   // $secondNum=0;
    if(is_numeric($card[1])){
        $firstNum=intval($card[1]);
    }else {
        switch ($card[1]) {
            case "J":
                $firstNum = 11;
                break;
            case "Q":
                $firstNum = 12;
                break;
            case "K":
                $firstNum = 13;
                break;
            case "A":
                $firstNum = 14;
                break;
        }
    }
    switch ($card[2]){
        case "S":$firstNum*=4;

            $players["$input[0]"]=$firstNum;
        break;
        case "H":$firstNum*=3;

            $players["$input[0]"]=$firstNum;
        break;
        case "D":$firstNum*=2;

            $players["$input[0]"]=$firstNum;
        break;
        case "C":$firstNum*=1;

        $players["$input[0]"]=$firstNum;
        break;
    }
    echo $card;
}
//$players["$input[0]"]=$input[1];
//print_r($players);
$input = explode(":",readline());
}

foreach ($players as $k =>$v){
    echo $k."->".$v.PHP_EOL;
}