<?php
    // run "composer dump-autoload -o" in terminal
    // only need this file below
    require_once "vendor/autoload.php";


    class Index{
        public function __construct()
        {
            
            $start = new Start();
            $start-> sayStartName();
            echo "<br>";

            $home = new Home();
            $home-> sayHomeName();
            echo "<br>";

            $filter = new Filter();
            $filter -> sayFilterName();
            echo "<br>";   
            
            $helper = new Helper();
            $helper -> sayHelperName();
            echo "<br>";


        }

    }
 
$index = new Index();
