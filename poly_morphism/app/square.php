<?php
    namespace app;
    use app\gem\Shape;
    include_once "app/gem/shape.php";

    class Square implements Shape{
        
        private $width,$height;
        public function __construct($width,$height)
        {
            $this->width = $width;
            $this->height = $height;
        }

        public function getArea(){
            return $this->width * $this->height;
        }
    }