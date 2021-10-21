<?php

    class Type{
        public function hello(bool $something){     //int or string or bool or null or float can be 
            var_dump($something);
        }
    }
    $obj = new Type();
    $obj->hello(12);

?>