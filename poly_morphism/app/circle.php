<?php

    namespace app;
    use app\gem\Shape;
    include_once "app/gem/shape.php";

    class Circle implements Shape{

        private $radius;
        public function __construct($radius)
        {
            $this->radius = $radius;
        }
        public function getArea(){
            return $this->radius * $this->radius * pi();
        }
    }
    