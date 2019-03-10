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
for($i=0 ; $i<$daysofTrip; $i++){
    $traveledDistanceDay = readline();
    $totalPriceForTravel = $totalPriceForTravel+($traveledDistanceDay*$fuelPerKM);
    echo $totalPriceForTravel.PHP_EOL;
if($i % 3 == 0){
    $totalAdditions+=$additionalExpenses;
}
    if($i % 5 == 0){
        $totalAdditions+=$additionalExpenses;
    }

}

echo "totalPriceForTravel- ".$totalPriceForTravel.PHP_EOL;
echo "totalAdditions- ".$totalAdditions.PHP_EOL;
echo "currentExpenses- ".$currentExpenses.PHP_EOL;
