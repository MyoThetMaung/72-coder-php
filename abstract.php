<?php
    //abstract never has body
    //class must be abstract when there is abstract method
    //must overwrite all abstract methods which were used in abstract class

    abstract class Dad
    {
        public $name = 'saimon';
        abstract public function doIt();
        public function myFun()
        {
            echo "i am my fun function";
        }
    }
    class Chi extends Dad{
        public function doIt(){
            echo "i am abstract and i am using here";
        }
    }
$child = new Chi();
$child -> doIt();
