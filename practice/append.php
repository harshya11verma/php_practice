<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt="Sam smith\n";
fwrite($myfile, $txt);
$txt = "Joe trib";
fwrite($myfile, $txt);
fclose($myfile);
?>
