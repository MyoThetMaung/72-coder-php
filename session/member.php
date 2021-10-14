<?php

    session_start();
    include "link.php";

    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }


?>

    <h2>Your are now a member</h2>