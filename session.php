<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
   <?php
   $_SESSION['favcolor']="red";
   $_SESSION['favcar']="mercedes";

   echo "The session variables are set <br>";
   echo "Favorite color of user is ".$_SESSION['favcolor']."<br>";
   echo "Favorite car of user is ".$_SESSION['favcar']."<br>";
   ?>
</body>
</html>