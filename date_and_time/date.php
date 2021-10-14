<?php

    $date = getdate();                              // show current time    | return array
   
    print_r($date);
    echo $date['year']."<br>";
    echo time();                                     //from Thursday 1 1970 till now

    echo date("a",time());
    

?>