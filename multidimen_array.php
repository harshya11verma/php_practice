<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .class{
            display: flex;
            margin: 20px;
            padding: auto;
        }
    </style>
</head>
<body>
    <div class="class">
    <?php
    $fruits=array(
        array("apple",12,23),
        array("banana",34,45),
        array("kiwi",2,4),
        array("orange",45,67),
    );
    // echo $fruits[0][0].": in stock:".$fruits[0][1]." Sold:".$fruits[0][2]. "<br>";
    // echo $fruits[1][0].": in stock:".$fruits[1][1]." Sold:".$fruits[1][2]. "<br>";
    // echo $fruits[2][0].": in stock:".$fruits[2][1]." Sold:".$fruits[2][2]. "<br>";
    // echo $fruits[3][0].": in stock:".$fruits[3][1]." Sold:".$fruits[3][2]. "<br>";
    
    for($row=0;$row<4;$row++){
        echo"<p><b>This is Row Number $row </b></p><br>";
        echo "<ul><br>";
        for($col=0;$col<3;$col++){
            echo "<li>".$fruits[$row][$col]."</li><br>";
        }
        echo "</ul>";
    }


    ?>
    </div>
</body>
</html>