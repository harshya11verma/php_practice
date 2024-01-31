<?php

// Function to calculate the sum of natural numbers up to n using a while loop
function sumUsingWhile($n) {
    // Initialize variables
    $sum = 0;
    $i = 1;
    while($i<=$n){
        echo $sum+=$i;
        $i++;
    }

    // Use a while loop to calculate the sum
    // Your code here

    return $sum;
}

// Function to calculate the sum of natural numbers up to n using a do-while loop
function sumUsingDoWhile($n) {
    // Initialize variables
    $sum = 0;
    $i = 1;
    do{
        $sum+=$i;
        $i++;
    }while($i<=$n);

    // Use a do-while loop to calculate the sum
    // Your code here

    return $sum;
}

// Function to calculate the sum of natural numbers up to n using a for loop
function sumUsingFor($n) {
    // Initialize variables
    $sum = 0;
    for($i=1;$i<=$n;$i++){
        echo $sum+=$i;
    }

    // Use a for loop to calculate the sum
    // Your code here

    return $sum;
}

// Example usage
$n = 5;
echo "Sum of natural numbers up to $n using while loop: " . sumUsingWhile($n) . "<br>";
echo "Sum of natural numbers up to $n using do-while loop: " . sumUsingDoWhile($n) . "<br>";
echo "Sum of natural numbers up to $n using for loop: " . sumUsingFor($n) . "<br>";

?>
