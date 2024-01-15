<!DOCTYPE html>
<html>
<head>
    <title>Voter Eligibility Checker</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter your name: <input type="text" name="name">
    enter number: <input type="number" name="age">
    <input type="submit" value="Submit">
</form>
<?php
// Sample data
// $personName = "John";
// $personAge = 25;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user input
    $personname = $_POST['name'];
    $personAge=$_POST['age'];

    // Display the user input
    echo "Hello, $personname!";
    

echo "<h2>Voter Eligibility Checker</h2>";
echo "<p>Hello, $personName! Let's check if you are eligible to vote.</p>";

// Basic if statement
if ($personAge >= 18) {
    echo "<p>You are eligible to vote. Congratulations!</p>";
} else {
    echo "<p>Sorry, you are not eligible to vote. You need to be at least 18 years old.</p>";
}

// Nested if statements
$hasID = true;

echo "<h3>Additional Checks:</h3>";

if ($personAge >= 18) {
    echo "<p>You are eligible to vote. Congratulations!</p>";

    // Nested if statement
    if ($hasID) {
        echo "<p>Make sure to bring your ID with you to the polling station.</p>";
    } else {
        echo "<p>It's advisable to bring your ID for verification purposes.</p>";
    }
} else {
    echo "<p>Sorry, you are not eligible to vote. You need to be at least 18 years old.</p>";
}

// Logical operators
$isRegisteredVoter = true;

echo "<h3>Additional Checks with Logical Operators:</h3>";

if ($personAge >= 18 && $isRegisteredVoter) {
    echo "<p>You are eligible to vote. Congratulations! Don't forget to vote.</p>";
} else {
    echo "<p>Sorry, you are not eligible to vote or not registered. Register and try again next time.</p>";
}}
?>

</body>
</html>
