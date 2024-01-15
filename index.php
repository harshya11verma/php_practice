<!DOCTYPE html>
<html>
<head>
    <title>User Input Example</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];function calculateSquare($number) {
    $square = $number * $number;
    return $square;} ?>">
    Enter your name: <input type="text" name="username">
    enter number: <input type="number" name="number">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user input
    $name = $_POST['username'];
    $number=$_POST['number'];

    // Display the user input
    echo "Hello, $name!".calculateSquare($number);
    
}
?>

</body>
</html>
