<?php
$input = readline();
$lastPos = 0;


while (($lastPos = strpos($input, ">", $lastPos))!== false) {
    $valuesAr[]=$input[$lastPos+1];
    $positions[$lastPos+1] =$input[$lastPos+1];
    $lastPos = $lastPos + strlen(">");
}

// Displays 3 and 10
foreach ($positions as $k=>$value) {
    echo $k."->".$value.PHP_EOL;
$newVales=substr_replace($input,"","$k",$value);
echo $newVales."----".PHP_EOL;
}
echo $input.PHP_EOL;
echo $newVales;

//foreach ($newVales as $vals){
//    echo $vals;
//}

