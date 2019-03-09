<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 28.2.2019 г.
 * Time: 23:24
 */


/**
 *
 */


$inputWagons = array_map('intval',explode(" ",readline()));
$wagonCapacity = intval(readline());
$command =explode(" ",readline( ));

while($command[0] !='end'){
    if ($command[0] == "Add"){
        array_push($inputWagons , $command[1]);
    } else {
       foreach ($inputWagons as &$cWag){
           if ($cWag+intval($command[0]) <= $wagonCapacity){
               $cWag+=intval($command[0]);
               break;
           }
       }
    }
    $command =explode(" ",readline());
}
echo implode(" ",$inputWagons);
