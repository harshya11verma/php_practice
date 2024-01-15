<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>check is a is greater then b & c</h1>
    <?php
    $a=10;
    $b=5;
    $c=8;
    if($a>$b && $a>$c){
        echo '$a is greater than $b & $c Which is:'.$a;
    }
    else{
        echo "a is not greatest";
    }
    ?>
</body>
</html>