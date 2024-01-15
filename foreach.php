<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Input Example</title>
</head>
<body>
    <h2>Enter Array Elements</h2>
    <form method="post" action="">
        <label for="array_input">Enter elements (comma-separated):</label>
        <input type="text" name="array_input" id="array_input" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the form is submitted
        if (isset($_POST['submit'])) {
            // Retrieve the input array as a comma-separated string
            $inputString = $_POST['array_input'];

            // Convert the comma-separated string to an array
            $inputArray = explode(',', $inputString);

            // Trim whitespace from each element in the array
            $trimmedArray = array_map('trim', $inputArray);
            echo "<h2>Entered Array:</h2>";
            foreach($trimmedArray as $elements){
               
                echo "<li>$elements</li>";
            }


            // Print the entered array
            
            // echo "<pre>";
            // print_r($trimmedArray);
            // echo "</pre>";
        }
    }
    ?>
</body>
</html>
