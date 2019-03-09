<?php
/**
 * Created by PhpStorm.
 * User: aware17
 * Date: 9.3.2019 г.
 * Time: 15:41
 */

class Person
{
    private $age;
    private $name;
    private $id;


    function __construct($age,$name, $id )
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getId()
    {
        return $this->id;
    }
    function __toString()
    {
        return   $this->name." with ID: ".$this->getId()." is ".$this->age." years old.".PHP_EOL;
    }
}

$listOfPersons=[];
$sortcheck=0;
$input = explode(" ", readline());
$tempAge=$input[2];
while ($input[0] != "End" ) {
    $persons = new Person($input[2], $input[0], $input[1]);

        array_push($listOfPersons, $persons);


    $input = explode(" ", readline());
}
sort($listOfPersons);
foreach ($listOfPersons as $tempPerson){
    echo $tempPerson;
}
?>