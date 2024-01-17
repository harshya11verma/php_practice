<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traits</title>
</head>
<body>
    <?php
    trait message{
        public function msg(){
            echo"hi !";
        }
    }
    trait message1{
        public function msg2(){
            echo" how are you? ";
        }
    }
    class welcome{
        use message;
    }
    class welcome1{
        use message,message1;
    }
    $obj=new welcome();
    $obj->msg();
    echo "<br>";
    $obj2=new welcome1();
    $obj2->msg();
    $obj2->msg2();

    ?>
</body>
</html>