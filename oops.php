<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oops</title>
</head>
<body>
    <?php
    class Fruit{
        public $name;
        public $color;

        function set_name($name){
            $this->name=$name;
        }
        function get_name(){
            return $this->name;
        }
        function set_color($color){
            $this->color=$color;
        }
        function get_color(){
            return $this->color;
        }
    }
    $apple= new Fruit();
    $banana= new Fruit();
    $purple= new Fruit();
    $blue= new Fruit();
    $apple->set_name('Apple');
    $purple->set_color('purple');
    $banana->set_name('Banana');
    $blue->set_color('blue');
    echo $apple->get_name();
    echo "<br>";
    echo $purple->get_color();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";
    echo $blue->get_color();
    ?>
</body>
</html>