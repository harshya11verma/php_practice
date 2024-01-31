<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "John Doe\n";
$txt="Henry Ford\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

// $filename = 'newfile.txt';

// $functions = [
// 	'is_readable',
// 	'is_writable',
// 	'is_executable'
// ];

// foreach ($functions as $f) {
// 	echo $f($filename) ? 'The file ' . $filename . $f : '';
// }


// Grant read and write permissions to the owner (PHP process)
// $permissions = 0600;

// Use chmod to set the permissions
// if (chmod($filename, $permissions)) {
//     echo "Permissions changed successfully.";
// } else {
//     echo "Failed to change permissions.";
// }
?>

