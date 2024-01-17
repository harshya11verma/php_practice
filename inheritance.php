<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inheritance</title>
</head>
<body>
    <?php
    class Car{
        public $name;
        public $color;

        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color; 
        }
        protected function intro(){
            echo ": This is a {$this->name} of {$this->color} color";
        }
    }
    class bike extends Car {
      function message(){
        echo "Lets see is this car or bike";
        $this->intro();
      }
    }

    $volvo= new bike("volvo","white");
    $volvo->message();
    $volvo->intro();
    
    ?>
</body>
</html>