<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    $name=$_GET['name'];
    $mail=$_GET['email'];

    echo "hi ".$name."<br>"."your mail id is ".$mail;
}
?>