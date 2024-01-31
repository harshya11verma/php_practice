<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
Enter Number:
    <input type="number" name="number">
    <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $number=$_POST['number'];
        $result=1;
        $i=$number;
        while($i>1){
            $result*=$i;
            $i--;
        }
        for($i=$number;$i>1;$i--){
             $result*=$i ;
        }
        echo $result;
    
    }

    ?>
</body>
</html>