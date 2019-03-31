
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>

</head>
<body>
<center>
<form>
N: <input type="text" name="num" />
    <input type="submit" />
</form>
</center>
<?php

if(isset($_GET['num'])){
    echo '<center>
    <table border="1">
    <tr>';

    for ($i = 0; $i <= $_GET['num']; $i++) {

        if($i%2==0){
            echo '<tr><td>'.$i.'</td></tr>';
        }

    }
    ?><input type="text" name="num" value="<?php echo $_GET['num']; ?>"/><?php
}
echo '
</tr>
</table>
</center>';
?>
</body>
</html>
