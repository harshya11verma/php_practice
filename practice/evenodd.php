<?php
function oddeven($arr){
    $odd=[];
    $even=[];
    foreach($arr as $number){
        if($number%2==0){
            $even[]=$number;
        }
        else{
            $odd[]=$number;
        }
    }
    echo " Your Array is: ".implode(", ",$arr)."<br>";
    echo " Here is even numbers in your Array: ".implode(", ",$even)."<br>";
    echo " Here is odd numbers in your Array: ".implode(", ",$odd)."<br>";

}
$nmb=[23,43,55,66,78,98];
oddeven($nmb);
?>