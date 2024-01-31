<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raised Power</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
Enter Number:
    <input type="number" name="number1">
    Enter Number:
    <input type="number" name="number2">
    <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $number1=$_POST['number1'];
        $number2=$_POST['number2'];
        $res=1;
        for($i=0;$i<$number1;$i++){
            $res=$number1**$number2;
        }
        echo $res;
    }
    ?>
</body>
</html>