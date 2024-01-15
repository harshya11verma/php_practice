<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <form method="post" action="<?php  echo $_SERVER['PHP_SELF']  ;   ?>">
        <input type="text" name="color">
        <input type="submit" value="submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
       $favcolor=$_POST["color"];
       switch($favcolor){
        case "red":
            echo "your favourite color is red";
            break;
            case "blue":
                echo "your favourite color is blue";
                break;
                case "green":
                    echo "your favourite color is green";
                    break;
                    default:
                    // echo "your fav color is ".$favcolor;
                    echo "your fav color is NOTHING";
       }
    }
    ?>
</body>
</html>