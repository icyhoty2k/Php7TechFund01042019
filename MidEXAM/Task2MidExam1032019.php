<?php
/**
 * Created by PhpStorm.
 * User: aware17
 * Date: 10.3.2019 г.
 * Time: 10:36
 */

$budget=0;
$ClothesMaxPrice=50.00;
$ShoesMaxPrice=35.00;
$AccessoriesMaxPrice=20.50;

$sellPrices=[];
$profit=0;
$input=explode("|", readline());

$budget = readline();
for($i=0; $i<count($input);$i++){
    $arr2=explode("->",$input[$i]);
if($arr2[0]=="Clothes" && $arr2[1]<=$ClothesMaxPrice && $budget-$arr2[1]>=0){
    $budget=$budget-$arr2[1];
    array_push($sellPrices,$arr2[1]*1.4);
    $profit=$profit+($arr2[1]*1.4-$arr2[1]);
}
    if($arr2[0]=="Shoes" && $arr2[1]<=$ShoesMaxPrice && $budget-$arr2[1]>=0){
        $budget=$budget-$arr2[1];
        array_push($sellPrices,$arr2[1]*1.4);
        $profit=$profit+($arr2[1]*1.4-$arr2[1]);
    }
    if($arr2[0]=="Accessories" && $arr2[1]<=$AccessoriesMaxPrice && $budget-$arr2[1]>=0){
        $budget=$budget-$arr2[1];
        array_push($sellPrices,$arr2[1]*1.4);
        $profit=$profit+($arr2[1]*1.4-$arr2[1]);
    }
}
foreach($sellPrices as $price){
    echo sprintf("%.2f ",$price);
    $budget=$budget+$price;
}

echo PHP_EOL;
echo sprintf("Profit: %.2f",$profit);
echo PHP_EOL;
if($budget >150){
    echo "Hello, France!";
}else {
    echo "Time to go.";
}

