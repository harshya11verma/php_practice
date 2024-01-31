<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Example</title>
</head>
<body>
    <h2>PHP Form Example</h2>
    <form action="options.php" method="post">
        <label>Select Programming Languages:</label>
        <br>
        <input type="checkbox" name="languages[]" value="c" id="c"><label for="c">C</label>
        <br>
        <input type="checkbox" name="languages[]" value="cpp" id="cpp"><label for="cpp">C++</label>
        <br>
        <input type="checkbox" name="languages[]" value="php" id="php"><label for="php">PHP</label>
        <br>
        <input type="checkbox" name="languages[]" value="perl" id="perl"><label for="perl">Perl</label>
        <br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
