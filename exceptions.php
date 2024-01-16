<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exception</title>
</head>
<body>
    <?php
    function divi($dividend,$divisor){
        if($divisor==0){
            throw new Exception("Divided by zero");
        }
        return $dividend/$divisor;
    }

    try{
        echo divi(5,0);
    }
    // catch(Exception $e){
    //    echo "cannot be divided<br><br>";
    // }
    finally{
        echo "process completed";
    }

    ?>
</body>
</html>