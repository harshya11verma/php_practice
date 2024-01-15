<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array combine</title>
</head>
<body>
    <?php
    $name= array("harshya","lakshay","sonu","monu");
    $roll= array(11,23,45,43);
    $c= array_combine($name,$roll);
    print_r($c) ;
    ?>
</body>
</html>