<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vowel</title>
</head>
<body>
    <?php
    $str="hi how are you";
    $str1= str_replace(" ","",$str);
    $vowel=["a","e","i","o","u"];
    $count=0;
    for($i=0;$i<strlen($str1);$i++){
        if(in_array(($str1[$i]),$vowel)){
            $count++;
        }
    }
    echo strlen($str1)."<br>";
    echo "number of consonents in string:".$str. " is ".(strlen($str1)-$count);
    ?>
</body>
</html>