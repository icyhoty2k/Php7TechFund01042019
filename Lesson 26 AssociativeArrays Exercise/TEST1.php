<?php
/**
 * Created by PhpStorm.
 * User: aware17
 * Date: 24.3.2019 г.
 * Time: 21:02
 */


$input = explode(": ", readline());
$playersCards = [];
$playersValueOfCards = [];
$cards = [];
$firstNum = 0;

while ($input[0] !="JOKER") {
    if (!key_exists($input[0], $playersCards)) {
        $playersCards["$input[0]"] =$input[1];
    } else {
        $playersCards["$input[0]"].=", ".$input[1];
    }
    $input = explode(": ", readline());
}
foreach ($playersCards as $playersCardKey => $playersCardsValue) {
    $playersValueOfCards["$playersCardKey"] = 0;
}
// var_dump($playersCards);
foreach ($playersCards as $pCardsKey => $pcardsVal) {
    $currentCalc = explode(", ", $pcardsVal);
    $currentCalc = array_unique($currentCalc);
//    print_r($currentCalc);
//}
//die();
    foreach ($currentCalc as $cardValue) {
        $firstNum=0;
        // $secondNum=0;
        if (is_numeric($cardValue[0])) {
            if ($cardValue[0] == 1) {
                $firstNum = 10;
                $cardValue[1] = $cardValue[2];
            } else {
                $firstNum = intval($cardValue[0]);
            }
        } else {
            switch ($cardValue[0]) {
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
//        echo $cardValue[1];
//        die();
        switch ($cardValue[1]) {
            case "S":
                $firstNum *= 4;

                $playersValueOfCards["$pCardsKey"] += $firstNum;
                break;
            case "H":
                $firstNum *= 3;

                $playersValueOfCards["$pCardsKey"] += $firstNum;
                break;
            case "D":
                $firstNum *= 2;

                $playersValueOfCards["$pCardsKey"] += $firstNum;
                break;
            case "C":
                $firstNum *= 1;

                $playersValueOfCards["$pCardsKey"] += $firstNum;
                break;
        }
    }


}

foreach ($playersValueOfCards as $plK => $plV){
    echo $plK.": ".$plV.PHP_EOL;
}


