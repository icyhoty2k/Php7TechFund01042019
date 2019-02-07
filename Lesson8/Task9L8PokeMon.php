<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 6.2.2019 г.
 * Time: 3:26
 */


/**
 *
 */

$pokePowerN=readline();
$distancePokeTargetsM=readline();
$exhaustionFactorY=readline();
$targetsPoked=0;
$pokePowerNOriginal=$pokePowerN;
while(true){
    if($distancePokeTargetsM == 0){
        break;
    }
    if($pokePowerN - $distancePokeTargetsM >=0){
        $pokePowerN-=$distancePokeTargetsM;
        $targetsPoked+=1;
    }
    if($exhaustionFactorY != 0 && $pokePowerNOriginal / 2 == $pokePowerN && $pokePowerN >= $exhaustionFactorY){
        $pokePowerN=intval($pokePowerN / $exhaustionFactorY);

    }
    if($pokePowerN < $distancePokeTargetsM){
        break;
    }

}

echo $pokePowerN.PHP_EOL.$targetsPoked;