<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>callback</title>
</head>
<body>
    <?php
    function any($str){
        return $str=strlen($str);
    }
    $arr=["harshya","lakshya","gudia","dhanu"];
    $length=array_map("any",$arr);
    print_r($length);
    ?>
</body>
</html>