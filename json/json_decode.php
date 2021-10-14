<?php

    $file = 'json.json';
    $fopen = fopen($file,'r');
    $fread = fread($fopen,filesize($file));
    
    $decode = json_decode($fread);
    print_r($decode);


?>


