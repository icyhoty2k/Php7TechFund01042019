<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 1.2.2019 г.
 * Time: 4:15
 */
/*
 * 7.	Vending Machine
Your task is to calculate the total price of a purchase from a vending machine. Until you receive "Start" you will be given different coins that are being inserted in the machine. You have to sum them in order to have the total money inserted. There is a problem though. Your vending machine only works with 0.1, 0.2, 0.5, 1, and 2 coins. If someone tries to insert some other coins you have to display "Cannot accept {money}" and not add it to the total money. On the next few lines until you receive "End" you will be given products to purchase. Your machine has however only "Nuts", "Water", "Crisps", "Soda", "Coke". The prices are: 2.0, 0.7, 1.5, 0.8, 1.0 respectively. If the person tries to purchase a not existing product print “Invalid product”. Be careful that the person may try to purchase a product they don’t have the money for. In that case print "Sorry, not enough money". If the person purchases a product successfully print "Purchased {product name}". After the "End" command print the money that are left formatted to the second decimal point in the format "Change: {money left}".

 */

$coin = 0;
$totalSumCoins = 0;
$product;
$Nuts = 2.0;
$Water = .7;
$Crisps = 1.5;
$Soda = 0.8;
$Coke = 1.0;
do {

    $coin = readline();

    if ($coin == 0.1 || $coin == 0.2 || $coin == 0.5 || $coin == 1 || $coin == 2) {
        $totalSumCoins += $coin;
    } else if ($coin != "Start") {
        echo "Cannot accept $coin \n";
    }


} while ($coin != "Start");
//echo "totalsum=".$totalSumCoins;

do {
    //round($totalSumCoins);
    //   $totalSumCoins=doubleval($totalSumCoins);
    $product = readline();
    switch ($product) {


        case "Nuts" :{
            if (($totalSumCoins - $Nuts) < 0) {
                echo "Sorry, not enough money";
                break;
            } else {
                $totalSumCoins -= $Nuts;
                echo "Purchased " . strtolower($product)."\n";
                break;
            }
        }
        case "Water" :
            {
                if (($totalSumCoins - $Water) < 0) {
                    echo "Sorry, not enough money";
                    break;
                } else {
                    $totalSumCoins -= $Water;
                    echo "Purchased $product" . strtolower($product)."\n";
                    break;}
            }
        case "Crisps" :
            {
                if (($totalSumCoins - $Crisps) < 0) {
                    echo "Sorry, not enough money";
                    break;
                }
                $totalSumCoins -= $Crisps;
                echo "Purchased " . strtolower($product)."\n";
                break;
            }
        case "Soda" :
            {
                var_dump($Soda);
                if (($totalSumCoins - $Soda) <  $Soda) {
                    echo "Sorry, not enough money\n";
                    break;
                } else {
                    $totalSumCoins -= $Soda;
                    echo "Purchased " . strtolower($product)."\n";
                    break;}
            }
        case "Coke" :{
            if (($totalSumCoins - $Coke) < 0) {
                echo "Sorry, not enough money\n" ;
                break;
            } else {
                $totalSumCoins -= $Coke;
                echo PHP_EOL . "Purchased ".strtolower($product)."\n";
                break;}
        }
        default:{

            if ($product == "End")
                break;
            else {
                echo "Invalid product\n";
                break;
            }
        }
    }

} while ($product != "End");


printf("Change: %0.2f", $totalSumCoins);




?>