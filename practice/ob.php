<?php
ob_start();
echo "Hello ";
$ob1=ob_get_contents();
echo "Amigo";
$ob2=ob_get_contents();
ob_end_clean();
var_dump($ob1,$ob2);
?>