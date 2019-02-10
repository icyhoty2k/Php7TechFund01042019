<?php
$powerN=intval(readline());
$distanceM=intval(readline());
$exhaustionFactorY=intval(readline());
$half=intval($powerN/2);
$count=0;

while($powerN>=$distanceM){
    $count++;

    $powerN-=$distanceM;

    if($powerN==$half && $exhaustionFactorY !=0){

        $powerN=intval($powerN/$exhaustionFactorY);
    }

}

echo "$powerN".PHP_EOL;
echo "$count";