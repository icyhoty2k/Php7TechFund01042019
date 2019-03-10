<?php



$inputPaintings = explode(" ", readline());
$commands = explode(" ", readline());
while ($commands[0] != "END") {
    if ($commands[0] == "Insert" && $commands[1]<count($inputPaintings)) {
        array_splice($inputPaintings, $commands[1] + 1, 0, $commands[2]);
    }
    If ($commands[0] == "Hide") {
        $pos = array_search($commands[1], $inputPaintings);
        array_splice($inputPaintings, $pos, 1);

    }
    If ($commands[0] == "Change") {
        $pos = array_search($commands[1], $inputPaintings);
        array_splice($inputPaintings, $pos, 1,$commands[2]);

    }
    If ($commands[0] == "Switch") {
        $posFirstEl = array_search($commands[1], $inputPaintings);
        $posSecondEl = array_search($commands[2], $inputPaintings);
        $num1=$inputPaintings[$posFirstEl];
        $num2=$inputPaintings[$posSecondEl];
        array_splice($inputPaintings, $posFirstEl, 1,$num2);
        array_splice($inputPaintings, $posSecondEl, 1,$num1);
    }
    If ($commands[0] == "Reverse") {
        $inputPaintings=array_reverse($inputPaintings);

    }
    $commands = explode(" ", readline());
}

foreach ($inputPaintings as $inputPainting) {
    echo $inputPainting." ";
}