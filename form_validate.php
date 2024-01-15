<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = $_POST["name"];
    $nameErr = "";
    $emailErr="";
   

    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
    }
    $email = $_POST["email"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
    echo "hi ";
   

    // Display the output on the page
    echo "<p>Entered Name: $name</p>";
    echo "<p>Entered Email: $email</p>";
    echo "<p>Error Message: $nameErr</p>";
    echo "<p>Error Message2: $emailErr</p>";
    echo "hi ";
    die;
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label>Name</label><input type="text" name="name">
    <label>Email</label><input type="email" name="email">
   
    <button type="submit">Submit</button>
</form>

</body>
</html>
