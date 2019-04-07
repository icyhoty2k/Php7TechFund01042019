<?php
/**
 * Created by PhpStorm.
 * User: aware17
 * Date: 28.3.2019 г.
 * Time: 22:01
 */

$consoleInput=explode("\\",readline());
$file=explode(".",end($consoleInput));
echo "File name: ".$file[0].PHP_EOL;
echo "File extension: " . $file[1] . PHP_EOL;





