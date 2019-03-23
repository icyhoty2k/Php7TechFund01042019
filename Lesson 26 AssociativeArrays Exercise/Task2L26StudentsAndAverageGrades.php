<?php
/**
 * Created by PhpStorm.
 * User: Pos
 * Date: 23.3.2019 г.
 * Time: 15:44
 */


$inputNumber=readline();
$studentAverageGrades=[];

for ($i=0; $i<$inputNumber; $i++){
    $studentName = readline();
    $grade=readline();
    if(array_key_exists($studentName , $studentAverageGrades)==$studentName){

        $studentAverageGrades[$studentName]=($studentAverageGrades[$studentName]+$grade)/2;
    } else  {
        $studentAverageGrades["$studentName"]=$grade;
    }

}
arsort($studentAverageGrades);
foreach ($studentAverageGrades as $key => $val) {
    if($val>=4.5) {
        echo $key . " -> " . sprintf("%.2f", $val) . PHP_EOL;
    }
}