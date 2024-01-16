<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    ENTER WEIGHT IN KILOS:
     <input type="number" name="weight">KG<br><br>
     ENTER HIEGHT IN METERS:
     <input type="number" step="any" name="hieght">M<br><br>
     <button type="submit" name="submit"  value="submit">submit</button>
    </form>
    <?php
    function bmi($weight,$hieght){
        return $weight/($hieght*$hieght) ;
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $weight=$_POST["weight"];
        $hieght=$_POST["hieght"];
        $bm=bmi($weight,$hieght);
        echo "your body mass index is: ".$bm;
    }
    ?>
</body>
</html>