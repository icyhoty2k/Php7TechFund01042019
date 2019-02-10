<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 4.2.2019 г.
 * Time: 23:33
 */


/**
 *
 */
$Amountofbatches =readline();
$totalBoxes=0;
for($i=0; $i<$Amountofbatches; $i++) {
    $flourIngrams = readline();
    $sugarIngrams = readline();
    $cоcоаIngrams = readline();

    $SinglecookieGrams = 25;
    $Cup = 140;
    $SmallSpoon = 10;
    $BigSpoon = 20;
    $CookiesperBox = 5;

    $totalCookiesPerBake = 0;

    $flourCups = floor($flourIngrams / $Cup);
    $sugarSpoons = floor($sugarIngrams / $BigSpoon);
    $cocoaSpoons = floor($cоcоаIngrams / $SmallSpoon);
    $min = min($flourCups, $sugarSpoons, $cocoaSpoons);


    $totalCookiesPerBake = (($Cup + $SmallSpoon + $BigSpoon) * ($min)) / $SinglecookieGrams;
    if ($flourCups < 1 || $sugarSpoons < 1 || $cocoaSpoons < 1) {
        echo "Ingredients are not enough for a box of cookies.\n";
    } else {

        echo "Boxes of cookies: " . floor($totalCookiesPerBake / 5) . "\n";

    }
    $totalBoxes += floor($totalCookiesPerBake / 5);
}
    echo "Total boxes: $totalBoxes";
