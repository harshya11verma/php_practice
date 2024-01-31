<?php
// PHP code to demonstrate
// star pyramid

// Function to demonstrate 
// printing pattern
function starPyramid($n)
{
    // outer loop to handle
    // number of rows
    for ($i = 0; $i < $n; $i++)
    {
        // inner loop to handle
        // number of spaces
        for ($j = $n - $i; $j > 1; $j--)
            echo " ";

        // inner loop to handle 
        // number of columns
        for ($j = 0; $j <= $i; $j++ )
        {
            // printing stars
            echo "* ";
        }

        // ending line after
        // each row
        echo "<br>";
    }
}

// Driver Code
$n = 5;
starPyramid($n);
?>
