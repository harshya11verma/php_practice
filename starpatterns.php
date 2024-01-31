<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>star patterns</title>
</head>
<body>
    <?php
   echo "<h1>Right angle triangle</h1> ";
    $rows = 5;

    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '* ';
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<h1>Inverted Right angle triangle</h1> ";
    for($i=5;$i>=1;$i--){
        for($j=1;$j<=$i;$j++){
            echo "* ";
        }
        echo "<br>";
    }

    // echo "<br>";
    // echo "<h1>Hollow Square</h1> ";
    // for($i=1;$i<=5;$i++){
    //     for($j=1;$j<=5;$j++){
    //         if($i==1 || $i==5 || $j==1 || $j==5){
    //             echo "* ";
    //         }
    //        else {
    //             echo "  ";
    //         }
            
    //     }
        
    //     echo "<br>";
    // }
    // echo "<br>";
    echo "<br>";
    echo "<h1>Star pyramid</h1> ";
    function pyramid($rows){
        for($i=1;$i<=$rows;$i++){
            for($j=1;$j<=$rows-$i;$j++){
                echo "  ";
            }
            for($k=1;$k<=2*$i-1;$k++){
                echo "* ";
            }
            echo "<br>";
        }
        
    }
     pyramid(5);


    
    ?>
</body>
</html>