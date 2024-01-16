<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reverse</title>
</head>
<body>
    <?php
    function revsen($sen){
        $words= explode(" ",$sen);
        $reverse= array_reverse($words);
        return implode(" ",$reverse);
    }
    $str="hi i am harshya";
    $str2= revsen($str);
    echo "your reversed sentence is : ".$str2;
    ?>
</body>
</html>