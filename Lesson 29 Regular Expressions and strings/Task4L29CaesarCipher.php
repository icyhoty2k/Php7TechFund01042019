<?php

$input = readline();

for ($i=0; $i<strlen($input); $i++){
   $x=ord($input[$i])+3;

 echo   chr($x);

}