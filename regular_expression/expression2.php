<?php

    //predefined character range
    /*
        [[:alpha:]]     => containing alphabet aZ through zZ
        [[:digit:]]     => containing numberial 0 to 9
        [[:alnum:]]     => containing alphabetical and numberial 
        [[:space:]]     => matches any string containing space
    */
    $var = "hello 1500 world";
    $pre = preg_replace("/[[:alpha:]]/",'&',$var);
    $pre = preg_replace("/[[:digit:]]/",'%',$var);
    $pre = preg_replace("/[[:alnum:]]/",'$',$var);
    $pre = preg_replace("/[[:space:]]/",'!',$var);
    echo $pre;
   


?>