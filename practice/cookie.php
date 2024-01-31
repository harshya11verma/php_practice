<?php
$cookie_name="Test";
$cookie_value="Ross";
setcookie($cookie_name,$cookie_value,time()+(86400*10),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie named ".$cookie_name." is not set";
    }
    else{
        echo " Cookie name: $cookie_name is set and its value is: <br> ";
        echo $_COOKIE[$cookie_name];
    }
    if(count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
      } else {
        echo "Cookies are disabled.";
      }
      ?>
    
</body>
</html>