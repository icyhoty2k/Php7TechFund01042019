<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 5.2.2019 г.
 * Time: 2:02
 */


/**
 *
 */
$numberOfSnowballs = readline();
$snowballSnowMAX = 0;
$snowballTimeMAX = 0;
$snowballQualityMAX = 0;
$snowballValueMAX = 0;
for($i=0; $i <$numberOfSnowballs; $i++ ) {
    $snowballSnow = readline();
    $snowballTime = readline();
    $snowballQuality = readline();
//======================== HQ SNOWBALL==============
//============================================END HQ SNOWBALL ===============

    $snowballValue = bcpow((bcdiv($snowballSnow , $snowballTime)) , $snowballQuality);
//    echo $snowballValue;
    if($snowballTimeMAX==0){
        $snowballValueMAX=0;
    } else {
    $snowballValueMAX = bcpow((bcdiv($snowballSnowMAX , $snowballTimeMAX)) , $snowballQualityMAX);
    }
    if ($snowballValue >= $snowballValueMAX) {
        $snowballSnowMAX = $snowballSnow;
        $snowballTimeMAX = $snowballTime;
        $snowballQualityMAX = $snowballQuality;
        $snowballValueMAX = $snowballValue;
    }
}
echo $snowballSnowMAX." : ".$snowballTimeMAX. " = ".$snowballValueMAX." ". "(".$snowballQualityMAX.")";
