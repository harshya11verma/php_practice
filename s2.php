<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operators</title>
</head>
<body>
<?php

// Arithmetic operators
$a = 10;
$b = 5;

echo "Arithmetic Operators:<br>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br><br>";

// Assignment operators
$x = 15;

echo "Assignment Operators:<br>";
echo "Original value of x: $x<br>";
$x += 5;
echo "After x += 5: $x<br>";
$x -= 3;
echo "After x -= 3: $x<br>";
$x *= 2;
echo "After x *= 2: $x<br>";
$x /= 3;
echo "After x /= 3: $x<br><br>";

// Comparison operators
$num1 = 20;
$num2 = "20";

echo "Comparison Operators:<br>";
var_dump($num1 == $num2); // Loose equality check
echo "<br>";
var_dump($num1 === $num2); // Strict equality check
echo "<br>";
var_dump($num1 != $num2); // Loose inequality check
echo "<br>";
var_dump($num1 !== $num2); // Strict inequality check
echo "<br>";
var_dump($a > $b); // Greater than
echo "<br>";
var_dump($a < $b); // Less than
echo "<br>";
var_dump($a >= $b); // Greater than or equal to
echo "<br>";
var_dump($a <= $b); // Less than or equal to
echo "<br><br>";

// Logical operators
$isTrue = true;
$isFalse = false;

echo "Logical Operators:<br>";
var_dump($isTrue && $isFalse); // Logical AND
echo "<br>";
var_dump($isTrue || $isFalse); // Logical OR
echo "<br>";
var_dump(!$isTrue); // Logical NOT
echo "<br><br>";

// Bitwise operators
$bitwiseA = 0b1010; // Binary representation of 10
$bitwiseB = 0b1100; // Binary representation of 12

echo "Bitwise Operators:<br>";
echo "Bitwise AND: " . ($bitwiseA & $bitwiseB) . "<br>";
echo "Bitwise OR: " . ($bitwiseA | $bitwiseB) . "<br>";
echo "Bitwise XOR: " . ($bitwiseA ^ $bitwiseB) . "<br>";
echo "Bitwise NOT: " . (~$bitwiseA) . "<br>";
echo "Left shift: " . ($bitwiseA << 1) . "<br>";
echo "Right shift: " . ($bitwiseA >> 1) . "<br>";

?>

</body>
</html>