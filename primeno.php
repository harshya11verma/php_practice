<?php
function prime($num){
    for($i=2;$i<=sqrt($num);$i++){
        if($num%$i==0){
            return false;
        }
        
    }
    return true;
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nmb=$_POST['number'];
 //$nmb=5;
    if(prime($nmb)){
     echo "this is prime number".$nmb;
    }
    else{
     echo "this is not prime nmbr".$nmb;
    };
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
    Enter number
    <input type="number" name="number">
    <input type="submit" value="submit">
    </form>

</body>
</html>
