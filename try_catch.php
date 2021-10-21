<?php

    try {
        if (fopen('hello.php','r')) {
            echo "file reading";
        }
    } 
    catch (\Throwable $th) {
        echo $th->getMessage();
    }
    finally{
        echo "all done";
    }
?>