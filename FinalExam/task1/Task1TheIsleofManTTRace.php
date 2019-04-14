<?php
$enter = readline();
while (true) {
    if(strlen($enter)<1){
        break;
    }
    $input2[] = $enter;
    $enter = readline();
}
//var_dump($input2);

foreach ($input2 as $input) {
    $re1 = '/^["#, $, %, *, &].\w*[["#, $, %, *, &]=\d*!!\w*/m';

    preg_match_all($re1, $input, $matches, PREG_SET_ORDER, 0);
    if(empty($matches)){
        echo "Nothing found!".PHP_EOL;
        continue;
    }

    $re = '/^[#$%*&][^#$%*&]*./m';
    preg_match($re, $input, $matchNameAr);
    if (!empty($matchNameAr)) {
        $matchName = $matchNameAr[0];
        $matchFirstLetterName = $matchName[0];

        $matchLastLetterName = substr($matchName, -1);
//echo $matchFirstLetterName." ".$matchLastLetterName;

        if ($matchFirstLetterName !== $matchLastLetterName) {
            echo "Nothing found!".PHP_EOL;
            continue;
        } else {
            $name = substr($matchName, 1, -1);
          //  echo $name;
        }
    } else {
        echo "Nothing found!".PHP_EOL;
        continue;
    }

    preg_match("/=\d*!!/m", $input, $numbers);
    if(!empty($numbers)) {

        preg_match("/\d+/m", $numbers[0], $numCut);
        $number = $numCut[0];
    }
    else {
        echo "Nothing found!".PHP_EOL;
        continue;}
    preg_match('/!!\S*/m', $input, $geoHashCode);
    if (!empty($geoHashCode)) {
        $geoCode = substr($geoHashCode[0], 2);
    } else {
        echo "Nothing found!".PHP_EOL;
        continue;
    }
    if ($number != strlen($geoCode)) {
        echo "Nothing found!".PHP_EOL;
        continue;
    }
    $geoCodeCoded="";
    for($i=0;$i<strlen($geoCode) ;$i++){

        $num= ord($geoCode[$i])+$number;
        $geoCodeCoded.=chr($num);
    }

echo "Coordinates found! $name -> $geoCodeCoded".PHP_EOL;
break;
}