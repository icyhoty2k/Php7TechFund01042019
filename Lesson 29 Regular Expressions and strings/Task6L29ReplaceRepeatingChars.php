<?php
$input = readline();
$output=[];
for ($i=0; $i<strlen($input)-1; $i++){

        if ($input[$i] != $input[$i + 1]) {
            $output[] = $input[$i];
        }

}
$output[]=$input[strlen($input)-1];
foreach ($output as $item) {
    echo $item;
}