<?php
    //exception 
    $file = 'hello.php';

    try {
        if(file_exists($file)){
            echo 'file exits';
        }else{
            throw new exception('file not found!');
        }
    } catch (Throwable $th) {
        echo $th;
    }

    //die or exit function
    die('do nothing after die');
    exit('do nothing after exit');

?>