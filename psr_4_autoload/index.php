<?php

    //Firstly, composer.json file have to create
    
    include_once "vendor/autoload.php";
    include_once "app/Middleware/Best.php";
    include_once "app/Middleware/Home.php";
    include_once "hello/hello.php";

    // use app\Middleware\Best as Good;                        //use 'Best' class as 'Good'
    // use app\Middleware\Home;                                //use 'Home' class

class Index{
        public function __construct()
        {
            $best = new \app\Middleware\Best();
            $best -> best();
            echo "<br>";

            $home = new \app\Middleware\Home();
            $home -> home();
            echo "<br>";

            $hello = new hello\Hello();
            $hello -> hello();
        }
    }

$ind = new Index();

   


?>