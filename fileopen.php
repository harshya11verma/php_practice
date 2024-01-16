<?php
// Open or create a file named "testfile.txt" in write mode
$myfile = fopen("testfile.txt", "w");

// Check if the file was opened successfully
if ($myfile) {
    // Content to be written to the file
    $content = "Hello, this is a test file.\n";

    // Write content to the file
    fwrite($myfile, $content);

    // Close the file handle
    fclose($myfile);

    echo "File 'testfile.txt' was created and written successfully.";
} else {
    echo "Unable to open or create the file 'testfile.txt'.";
}
?>
