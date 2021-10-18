<?php
    include_once "dbhacker.php";


    function registerUser($username,$email,$password){
        if(usernameCheck($username) && passwordCheck($password) && emailCheck($email)){
            return insertUser($username,$email,$password);
        }else{
            return "fail";
        }
    }


    function usernameCheck($username){
        if(strlen($username) >= 6){
            $bol = preg_match('/^[\w]+$/',$username);                                               //can start with any words
            return $bol;
        }else{
            return false;
        }
    }

    function emailCheck($email){
        if(strlen($email) >= 15){
            $bol = preg_match('/^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,4}+$/',$email);                       //email valid checking   
            return $bol;   
        }else{
            return false;
        }
    }

    function passwordCheck($password){
        if(strlen($password) >=6){
            $bol = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/',$password);           //check small,capital,digit,special letters
            return $bol;
        }else{
            return false;
        }
    }

    function loginUser($email,$password){
        if(emailCheck($email) && passwordCheck($password)){
            return userLogin($email,$password);
        }else{
            return "Auth fail!";
        }
    }

?>