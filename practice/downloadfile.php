<?php
// File path
$filePath = 'newfile.txt';

// Check if the file exists
if (file_exists($filePath)) {
    // Set headers for file download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
    header('Content-Length: ' . filesize($filePath));

    // Read the file and output its contents
    readfile($filePath);
} else {
    // File not found
    echo "File not found.";
}
?>
