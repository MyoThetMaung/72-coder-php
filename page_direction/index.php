<?php
$qry = $_SERVER['QUERY_STRING'];                //call from url self writing
switch($qry){
    case "home":
        header("Location: home.php");
        break;
    case "about":
        header("Location: about.php");
        break;
    case "contact":
        header("Location: contact.php");
        break;
    default:
        echo "no value";
}


?>