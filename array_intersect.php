<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array intersect</title>
</head>
<body>
    <?php
    $arr1=[1,2,3,4,5];
    $arr2=[6,7,4,5,0];
    $arri=array_intersect($arr1,$arr2);
    print_r($arri);
    
    ?>
</body>
</html>