<?php

    require_once "vendor/autoload.php";
    require_once "app/circle.php";
    require_once "app/square.php";
    require_once "app/gem/shape.php";
    use app\Circle;
    use app\Square;
    use app\gem\Shape;

    class Index{
        public function __construct()
        {
            $circle = new Circle(5);
            $this->getPrice($circle);
            echo "<br>";

            $square = new Square(20,40);
            $this->getPrice($square);
            echo "<br>";
        }

        public function getPrice(Shape $shape){
            $area = $shape -> getArea();
            echo "Your total price is".$area*10;                         //1 square feet is 17 kyats
        }
    }
    $ind  = new Index();




