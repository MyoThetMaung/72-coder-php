<?php

/* 
    important note
    1. static cannot call non-static not at all
    2. non static can call static anytime
*/

class Index{
        private static $count=0;                            //'static' mean recording memeories
        public function getCount(){             
            self::$count++;                                 //use 'self' for static key word
            echo self::$count."<br>";
        }
    }

    $object = new Index();                                  //'static' records 'getCount' function 
    $object -> getCount();                                  //normal function do not work after calling once but not statics
    $object -> getCount();
    

    $obj = new Index();                                     //here also 'static' records in order of $object
    $obj -> getCount();
    $obj -> getCount();
    $obj -> getCount();
?>