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
    $vowel=["a","e","i","o","u"];
    $count=0;
    for($i=0;$i<strlen($str);$i++){
        if(in_array(strtolower($str[$i]),$vowel)){
            $count++;
        }
    }
    echo "number of vowels in string:$str is: $count"
    ?>
</body>
</html>