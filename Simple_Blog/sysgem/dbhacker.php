<?php

    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASS","");
    define("DB_NAME","simple_blog");


    function dbConnect(){
        $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if(mysqli_connect_errno()){
            echo "Database connection fail";
        }else{
            return $db;
        }
    }

    function encodePass($password){
        $password = md5($password);
        $password = sha1($password);
        $password = crypt($password,$password);
        return $password;
    }
    
    function getTimeNow(){
        return date("Y-m-d H:m:s",time());
    }

    function insertUser($username,$email,$password){
        $db = dbConnect();
        $currentTime = getTimeNow();
        $password = encodePass($password);
        // $query = "SELECT * FROM users WHERE email = '$email";
        // $result = mysqli_query($db,$query);
        $query = "INSERT INTO users (username,email,password,created_at,updated_at) VALUES ('$username','$email','$password','$currentTime','$currentTime')";
        $result = mysqli_query($db,$query);  

        if($result == 1){
            echo "Register successful";
        }else{
            echo "Register fail";
        }


    }

    function userLogin($email,$password){
        $password = encodePass($password);
        $db = dbConnect();
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_connect($db,$query);
        if($result){

            $username = "";
            foreach ($result as $key) {
                $username = $key['username'];
            }
            setSession('username',$username);
            setSession('email',$email);
            return 'login success';
        }else{
            return 'login fail';
        }
    }




?>