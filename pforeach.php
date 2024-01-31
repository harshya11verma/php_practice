<?php

// // Function to calculate and print the average of an array
// function calculateAverage($numbers) {
//     $sum = 0;
//     $count = 0;

//     // Use foreach loop to iterate through the array
//     foreach ($numbers as $number) {
//         // Accumulate the sum of numbers
//         $sum += $number;
        
//         // Increment the count of numbers
//         $count++;
//     }

//     // Calculate the average
//     $average = $sum / $count;

//     // Print the result
//     echo "The average of the numbers is: $average";
// }

// // Example usage
// $numberArray = [10, 15, 20, 25, 30];
// calculateAverage($numberArray);
function filodds($numbers){
    $evenmbr=[];
    foreach($numbers as $number){
        if($number%2==0){
            $evenmbr[]=$number;
        }
    }
    echo "even numbers :" .implode(", ",$evenmbr);
}
$arr=[2,3,4,5,6,7,8];
filodds($arr);

function primes($numbers){
    $prime=[];
    $np=[];
    foreach($numbers as $number){
        for($i=2;$i<sqrt($number);$i++){
            if($number%$i==0){
                $np[]=$number;

            }
            else{
                 $prime[]=$number;
            }
        }
    }
    echo "<br>prime numbers :" .implode(", ",$prime);
}
primes($arr);
?>

