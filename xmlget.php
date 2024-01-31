<?php
$xml=simplexml_load_file('note.xml');
echo $xml->to."<br>";
echo $xml->from."<br>";
echo $xml->body."<br>";
?>