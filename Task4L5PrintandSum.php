<?php


$start=readline();
$end=readline();
$sum=0;
$count=$end-$start;

for ($i=0 ; $i<=$count ; $i++){
    echo $start+$i." " ;
    $sum+=$start+$i;
}
echo PHP_EOL;
echo "Sum: " .$sum;