<?php

    session_start();
    session_destroy();                          // unset or session_destroy can be used  | deleting session 
    // unset($_SESSION['username']);
    // unset($_SESSION['password']);
    include "link.php";

    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }


?>
