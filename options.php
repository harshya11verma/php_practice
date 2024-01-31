<?php
// Check if any languages were selected
if($_SERVER['REQUEST_METHOD']=='POST'){
    // Retrieve selected languages
    $selectedLanguages = $_POST['languages'];

    // Print the selected values
    echo "<h2>Selected Programming Languages</h2>";
    foreach ($selectedLanguages as $language) {
        echo "<p>$language</p>";
    }
} else {
    echo "<p>No languages selected.</p>";
}
?>
