<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anagram</title>
</head>
<body>
    <?php
    function isanagram($str1,$str2){
        $str1=str_replace(" ","",strtolower($str1));
        $str2=str_replace(" ","",strtolower($str2));
        return count_chars($str1,1)==count_chars($str2,1);
    }
    $v1="loot";
    $v2="tool";
    $res=isanagram($v1,$v2);
    if($res){
        echo "Words are anagram";
    }
    else{
        echo "Words are not anagram";
    }
    ?>
</body>
</html>