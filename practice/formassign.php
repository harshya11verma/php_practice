<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Assignment</title>
</head>
<body>
    <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
     Enter inputs and operations:
     input 1:
     <input type="number" name="num1">
     &nbsp&nbsp
     operation:
     <input type="text" name="operation">
     &nbsp&nbsp
     input 2:
     <input type="number" name="num2"><br>
     <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $n1=$_GET['num1'];
        $n2=$_GET['num2'];
        $op=$_GET['operation'];
        if($op=="+"){
            echo $n1+$n2;
        }
        elseif($op=="-"){
            echo $n1-$n2;
        }
        elseif($op=="x"){
            echo $n1*$n2;
        }
        elseif($op=="/"){
            echo $n1/$n2;
        }
        else{
            echo "Please enter valid Operation";
        }

    }
    ?>
</body>
</html>