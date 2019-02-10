<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 2.2.2019 г.
 * Time: 0:01
 */


$coin = 0;
$totalSumCoins = 0.0;
$product;

do {

    $coin = readline();

    if ($coin == 0.1 || $coin == 0.2 || $coin == 0.5 || $coin == 1 || $coin == 2) {
        $totalSumCoins += $coin;
    } else if ($coin != "Start") {
        echo "Cannot accept $coin \n";
    }


} while ($coin != "Start");

function  productCheck($curProduct  , $totalSum){
    $Nuts =2.00;
    $Water =0.70;
    $Crisps = 1.50;
    $Soda = 0.80;
    $Coke = 1.00;

    if (isset($$curProduct)&&round(($totalSum-$$curProduct),2) < 0) {
        echo "Sorry, not enough money \n";
    //  echo "totalSumCoins ".$totalSum;
       // echo "CurrProduct ".$$curProduct;
      // echo "Total=$totalSum - ".$$curProduct;
    //   $sum=$totalSum-$$curProduct;
     //   echo "totaravno=".($sum);

    }
    else if(isset($$curProduct) ){
        $totalSum = $totalSum - $$curProduct;
        echo "Purchased " . strtolower($curProduct) . "\n";
    }
    if (!isset($$curProduct)){
        echo "Invalid product\n";
    }
    return $totalSum;

}
do {

    $product = readline();
    if($product=="End")break;
    $totalSumCoins=  productCheck($product, $totalSumCoins);

}
while (true);




echo "Change: ".sprintf('%0.2f', abs($totalSumCoins));