<?php
/**
 * Created by PhpStorm.
 * User: aware17
 * Date: 10.3.2019 г.
 * Time: 9:09
 */


$daysofTrip = readline();
$budget = readline();
$groupOfPeope = readline();
$fuelPerKM = readline();
$foodEexpensesPerPersonForDay = readline();
$priceOfRoomPerPerson = readline();
$totalDistanceForVacation=0;
$traveledDistanceDay=0;
if($daysofTrip==0 || $budget==0 || $groupOfPeope==0){
    exit;
}
//
$totalFooodExpenses =$daysofTrip*$groupOfPeope*$foodEexpensesPerPersonForDay;
if($groupOfPeope >10){
    $totalPriceForHotel=$priceOfRoomPerPerson*$groupOfPeope*$daysofTrip*0.75;
}
else{
    $totalPriceForHotel=$priceOfRoomPerPerson*$groupOfPeope*$daysofTrip;
}
$totalPriceForFuelTraveledDistance=$totalDistanceForVacation*$fuelPerKM;
$currentExpenses=$totalFooodExpenses+$totalPriceForHotel;
$totalExpenses=0;
$recievedMoney=0;
$expenses=0;
$additionalExpenses=$currentExpenses*0.4;

$totalAdditions=0;
$totalPriceForTravel=0;
$tempBudget=$budget;
//echo $currentExpenses.PHP_EOL;
for($i=1 ; $i<=$daysofTrip; $i++){

    $traveledDistanceDay = readline();
    $currentExpenses=$currentExpenses+($traveledDistanceDay*$fuelPerKM);

    if($i!=0 && $i % 3 == 0){
        $currentExpenses=$currentExpenses+($currentExpenses*0.4);
    }
    if($i!=0 && $i % 5 == 0){
        $currentExpenses=$currentExpenses+($currentExpenses*0.4);
    }
    if($i!=0 && $i % 7 == 0){
        $widrawAmount=$currentExpenses/$groupOfPeope;
        $currentExpenses=$currentExpenses-$widrawAmount;

    }
    if($budget<$currentExpenses ){
        $ostatak=$currentExpenses - $budget;
        echo sprintf("Not enough money to continue the trip. You need %.2f$ more.", $ostatak);
        exit;
    }else {

    }
}




if($budget-$currentExpenses >=0 ){
    $ostatak=$budget-$currentExpenses;
    echo sprintf("You have reached the destination. You have %.2f$ budget left.",$ostatak);
}else if($budget-$currentExpenses <0 ) {
    $ostatak = $currentExpenses - $budget;
    echo sprintf("Not enough money to continue the trip. You need %.2f$ more.", $ostatak);
}