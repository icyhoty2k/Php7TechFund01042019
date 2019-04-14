<?php
$input=explode("->",readline());
$roads=[];

while($input[0]!="END"){
    $command=$input[0];
switch ($command){
    case "Add":
    $road = $input[1];
    $racer = $input[2];
    $roads[$road][] = "$racer";
    break;
    case "Move":
    $oldRoad = $input[1];
    $newRoad = $input[3];
    $racer = $input[2];

    if($arr=array_search($racer,$roads[$oldRoad])!==false){

        $roads[$newRoad][]=$racer;
        $arr=array_search($racer,$roads[$oldRoad]);
        unset($roads[$oldRoad][$arr]);

    }

    break;
    case "Close":
        $closeRoad = $input[1];
        unset($roads[$closeRoad]);

        break;

}


$input = explode("->", readline());

}
$counts = array_map(function($v) { return count($v); }, $roads);
$keys = array_keys($roads);
array_multisort($counts, SORT_DESC, $keys, SORT_ASC, $roads);
echo "Practice sessions:".PHP_EOL;
foreach ($roads as $road1 => $racer1 ){
    echo $road1.PHP_EOL;
    foreach ($roads["$road1"] as $racer2){
        echo "++".$racer2.PHP_EOL;
    }


}
