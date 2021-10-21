<?php
    $number = 24;
    $arr = ["one"=>"1", "two"=>"2", "three"=>"3"];
    

    
    array_walk($arr,function ($key,$value) use($number) {
        echo "key is {$key} and value is {$value} <br>";
    });      
                  
    //first parameter is "Array" and second is "function" we want to use


?>