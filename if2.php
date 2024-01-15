<!DOCTYPE html>
<html>
<head>
    <title>Voter Eligibility Checker</title>
</head>
<body>

<h2>Voter Eligibility Checker</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process form data
    $personName = $_POST["personName"];
    $personAge = $_POST["personAge"];

    echo "<p>Hello, $personName! Let's check if you are eligible to vote.</p>";

    // Basic if statement
    if ($personAge >= 18) {
        echo "<p>You are eligible to vote. Congratulations!</p>";
    } else {
        echo "<p>Sorry, you are not eligible to vote. You need to be at least 18 years old.</p>";
    }
} else {
    // Display form
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="personName">Enter your name:</label>
        <input type="text" name="personName" required><br>

        <label for="personAge">Enter your age:</label>
        <input type="number" name="personAge" required><br>

        <input type="submit" value="Check Eligibility">
    </form>
    <?php
}
?>

</body>
</html>
