<?php
$input = explode(">", readline());
$output=[$input[0]];
$x="";
$num=0;
$sum=0;
foreach ($input as $item) {

    if (is_numeric($item[0])){
        $num=$item[0];

      //  echo strlen($item);
        if($num>1 && strlen($item)<$num){
            $sum+=$num-1;
        }
       $x= substr_replace($item,"",0,$item[0]);
        $output[]=$x;

    }


}
$last=0;
$sum+=$input[count($input)-1][0];
$last=substr_replace($input[count($input)-1],"",0,$sum);
array_pop($output);
$output[]=$last;

$numItems = count($output);
$i = 0;
foreach ($output as $currentItem){


    if(++$i === $numItems) {
        echo $currentItem;
    } else {
        echo $currentItem . ">";
    }

}