<?php
    session_start();                                              //always write first to declare session
    include "link.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        if($username == 'saimon' && $password == 123456){
            $_SESSION['username'] = $username;                      //creating username into session
            $_SESSION['password'] = $password;                      //creating password into session
            header("Location: member.php");
        }else{
            echo "Your are not valid user";
        }
    }

?>
    <h2>Index Page</h2>
    <form action="" method="post">
        <input type="text" name="username" placeholder="username"> <br><br>
        <input type="password" name="password" placeholder="password"> <br><br> 
        <input type="submit" name="submit" value="Login">
    </form>
