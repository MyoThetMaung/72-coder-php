<?php

    $arr = ["one"=>1, "two"=>2, "three"=>3];
    var_dump($arr);
    echo "<hr>".$arr['one'];

    echo "<hr>";

    $obj = (object) $arr;                               //changing array to object
    var_dump($obj);
    echo "<hr>".$obj->one;




?>