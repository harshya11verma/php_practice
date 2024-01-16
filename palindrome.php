<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrome</title>
</head>
<body>
    <?php
    function palindrome($str){
        $str= strtolower(str_replace(" ","",$str));
        return $str==strrev($str);
    }
    $input="Able was I ere I saw Elba";
    if(palindrome($input)){
        echo "string is palindrome";
    }
    else{
        echo "not palindrome";
    }
    ?>
</body>
</html>