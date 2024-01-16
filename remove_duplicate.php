<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remove duplicate</title>
</head>
<body>
    <?php
    function remdup($array){
        return array_values(array_unique($array));
    }
    $arr=[1,1,1,1,1,1,2,2,3,4,5,6,6];
    $rem= remdup($arr);
    echo "the unique array is: ".$rem."<br>";
    print_r($rem);
    foreach($rem as $x=>$y){
        echo "array is:".$x."=>".$y;
    }
    ?>
    
</body>
</html>