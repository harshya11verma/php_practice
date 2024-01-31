<?php
echo " To check if number is prime ";
function checkprime($n){
    for($i=2;$i<=sqrt($n);$i++){
        if($n%$i==0){
            echo "This is not a prime number";
            return false;
            
        }
        else{
            echo "This is a prime number";
        }
    }
    return true;
}
$p=6;
echo checkprime($p);
?>