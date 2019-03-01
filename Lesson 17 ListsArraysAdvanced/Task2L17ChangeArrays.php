<?php
/**
 * Created by PhpStorm.
 * User: G750js
 * Date: 1.3.2019 г.
 * Time: 0:12
 */


/**
 *
 */
function odd($input)
{
    return ($input & 1);
}
function even($input)
{
    return !($input & 1);
}
$input = array_map('intval', explode(" ", readline()));
$command = explode(" ", readline());
while (true) {
    if ($command[0] == 'Odd' || $command[0] == 'Even') {
        break;
    }
    if ($command[0] == 'Delete') {
        for ($i = 0; $i < count($input); $i++) {
            if ($input[$i] == $command[1]) {
                array_splice($input, $i, 1);
                $i = 0;
            }
        }
    } else if($command[0] =='Insert') {
        array_splice($input, $command[2], 0, $command[1]);
    }
    $command = explode(" ", readline());
}
if ($command[0] == 'Odd') {
    echo implode(' ',array_filter($input, 'odd')).PHP_EOL;
} else {
    echo implode(' ',array_filter($input, 'even')).PHP_EOL;

}
//echo implode(" ", $input);