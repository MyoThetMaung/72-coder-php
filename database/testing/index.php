<?php

    define("DB_HOST","localhost");
    define("DB_NAME","72_testing");
    define("DB_USER","root");
    define("DB_PASS","");
    
    // function errorDebug($data){
    //     echo "<pre>".print_r($data)."</pre>";
    // }
    function dbConnect(){
        return mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        echo mysqli_connect_errno() > 0 ? "connection success" : "connection fail";
    }

    function selectquery(){
        $db = dbConnect();
        $query = "SELECT * FROM users";
        $result = mysqli_query($db,$query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "id is ".$row['id']. "<br>";
                    echo "name is ".$row['name']. "<br>";
                    echo "email is ".$row['email']. "<br>";
                    echo "password is ".$row['password']. "<hr>";
                }
            }
    }
    // selectquery();


    function insertquery(){
        $db = dbConnect();
        $query = "INSERT INTO users(name,email,password) VALUES ('kyawkyaw','kyaw@gmail.com','kyaw')";
        $result = mysqli_query($db,$query);
    }
    // insertquery();


    function updatequery(){
        $db = dbConnect();
        $query = "UPDATE users SET name='myothetmaung' WHERE id = 1";
        $result = mysqli_query($db,$query);
    }
    // updatequery();

    function deletequery(){
        $db = dbConnect();
        $query = "DELETE FROM users WHERE id = 3";
        $result = mysqli_query($db,$query);

    }
    // deletequery();
    






?>  