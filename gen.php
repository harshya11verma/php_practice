<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>generate prime numbers</title>
</head>
<body>
    <?php
    function genprime($n){
        $num=2;
        $primes=[];
        while(count($primes)<$n){
            if(isprime($num)){
                $primes[]=$num;
            }
            $num++;
        }
        return $primes;

    }
    function isprime($num){
        if($num<2){
            return false;
        }
        for($i=2;$i<sqrt($num);$i++){
            if($num%$i==0){
                return false;
            }
        }
        return true;
    }

    $count=10;
    $pr=genprime($count);
    print_r($pr);
    ?>
</body>
</html>