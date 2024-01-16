<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>missing number</title>
</head>
<body>
    <?php
    function missing_number($arr){
        $n=count($arr)+1;
        $sum=$n*($n+1)/2;
        $actualsum=array_sum($arr);
        return $sum-$actualsum;
    }
    $are=[1,2,3,5];
    $f=missing_number($are);
    print_r($f);
    
    ?>
</body>
</html>