<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])) {
$numIsPrime="";
$notPrime="";
    for ($i = 2; $i <= $_GET['num']; $i++) {
        $found = false;
        for ($j = 2; $j <= $i; $j++) {
            if ($i % $j == 0 && $i / $j != 1) {
                $notPrime=$notPrime.$i." ";
                $found = true;
                break;
            }
        }
        if(!$found){
            $numIsPrime=$i." ".$numIsPrime;
}
    }
//echo $notPrime;
    //." - tova sa Not -prime nums";
    ?>
    <!--<br> -->
    <?php

echo $numIsPrime;
    //." - tava sa Prime nums";
}
?>
</body>
</html>
