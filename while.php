<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>
    <?php
    $i=0;
    $num=2;
    while($i<100){
        $i+=10;
        echo $num."x".$i."=".($num*$i)."<br>";
        // $i++;
    }
    ?>
    <br><br>
    <?php
    $num=5;
    for($i=0;$i<=200;$i+=20){
        // $i+=20;
        // if($i==60){
        //     echo "i dont remember rest";
        //     break;
        // }
      echo $num."x".$i."=".($num*$i)."<br>";
    }

    ?>
    <?php
    $i=1;
    $sum=0;
    while($i<=20){
        if($i%2==0){
            $sum+=$i ;
        }
        $i++;
        
    }
    echo $sum;
    ?>
    <?php
    echo "<br><br>";
    $sum=0;
    for($i=1;$i<=40;$i++){
        if($i%2==0){
$sum+=$i;
        }
    }
    echo $sum;
    ?>
    <?php
    echo "<br><br>";
    $f=1;
    for($i=5;$i>1;$i--){
       $f*=$i;
    }
    echo "$f";
    ?>
    <?php
$string = "hello";
$reversedString = "";

foreach (str_split($string) as $char) {
    $reversedString = $char . $reversedString;
}

echo "Original String: $string<br>";
echo "Reversed String: $reversedString";
?>

</body>
</html>