<?php
/**
 * Created by PhpStorm.
 * User: aware17
 * Date: 9.3.2019 г.
 * Time: 17:14
 */

class Student{
    private $name;
    private $grades=[];
    private $averageGrade;

    /**
     * Student constructor.
     * @param $name
     * @param array $grades
     * @param $averageGrade
     */
    public function __construct($name, array $grades)
    {
        $this->name = $name;
        $this->grades = $grades;

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getGrades(): array
    {
        return $this->grades;
    }

    /**
     * @return mixed
     */
    public function getAverageGrade()
    {
        $this->averageGrade=array_sum($this->grades)/count($this->grades);
        return sprintf('%0.2f',$this->averageGrade);

    }

function __toString()
{
    return $this->getName()." -> ".$this->getAverageGrade().PHP_EOL;
}
}
$name;
$input;
$averages=[];
$numberofStuedents=readline();
for($i=0; $i<$numberofStuedents; $i++){
    $input=explode(" ",readline());
    $name=array_shift($input);
    $currStudent = new Student($name,$input);
    if($currStudent->getAverageGrade() >=5.00){
array_push($averages, $currStudent);

    }

}
usort($averages ,function (Student $s1 , Student $s2){
    $avgGrade1=$s1->getAverageGrade();
    $avgGrade2=$s2->getAverageGrade();
    $name1=$s1->getName();
    $name2=$s2->getName();
    if($name1 === $name2){
    return $avgGrade2<=>$avgGrade1;}
    return $name1<=>$name2;
}
    );

foreach ($averages as $av){
    echo $av;
}
