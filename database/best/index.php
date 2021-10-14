<?php

    define("DB_HOST","localhost");
    define("DB_NAME","72_best");
    define("DB_USER","root");
    define("DB_PASS","");
 
    function dbConnect(){
        return mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        echo mysqli_connect_errno() > 0 ? "connection success" : "connection fail";
    }
    function passwordGen($password){
        $password = md5($password);
        $password = sha1($password);
        $password = crypt($password,$password);
    }
    /*
        Tables create
        $query = "CREATE TABLE IF NOT EXISTS users (
            id INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(225) NOT NULL,
            creater INT(3) NOT NULL,
            email VARCHAR(225) NOT NULL,
            password VARCHAR(225) NOT NULL,
            UNIQUE KEY email (email)
            ); ";

        $query = "CREATE TABLE IF NOT EXISTS subjects (
            id INT(3) NOT NULL AUTO_INCREMENT,
            name VARCHAR(225) NOT NULL,
            PRIMARY KEY (id)
            ); ";
    
        $query = "CREATE TABLE IF NOT EXISTS tutorials (
            id INT(3) NOT NULL AUTO_INCREMENT,
            subject_id INT(3) NOT NULL,
            title VARCHAR(225) NOT NULL,
            created_by INT(3) NOT NULL,
            PRIMARY KEY (id)
            ); ";
   
        $query = "CREATE TABLE IF NOT EXISTS tutorial_views (
            id INT(3) NOT NULL PRIMARY KEY,
            static_view INT(3) NOT NULL,
            unique_view INT(3) NOT NULL
            ); ";
    */

    /* 
        $result = mysqli_query(dbConnect(),$query);
        echo $result ? "Table created successfully" : "Table creation fail";
    */
    /*
    $users = json_decode(file_get_contents("users.json"));
    foreach ($users as $user) {
        $password = passwordGen($user->password);
        $query = "INSERT INTO users VALUES ($user->id, '$user->name', '$user->creator', '$user->email', '$password')";
        mysqli_query(dbConnect(),$query);
    }
    */
    /*
    $subjects = json_decode(file_get_contents("subjects.json"));
    foreach ($subjects as $subject) {
        $query = "INSERT INTO subjects (name) VALUES ('$subject->name')";
        mysqli_query(dbConnect(),$query);
    }
    */
    /*
    $tutorials = json_decode(file_get_contents("tutorials.json"));
    foreach ($tutorials as $tutorial){
        $db = dbConnect();
        $query = "SELECT * FROM subjects WHERE id = $tutorial->subject_id";
        $result = mysqli_query($db,$query);
        $name = '';
        foreach ($result as $row) {
            $name = $row['name'];
        }
 
        $subject_id = $tutorial->subject_id;
        $creator_id = $tutorial->creator_id;
        $t = 0;
        for ($i=$tutorial->start_id; $i <= $tutorial->end_id ; $i++) { 
            $title = $name . ' '. ++$t;
            $query = "INSERT INTO tutorials (subject_id,title,created_by) VALUES ('$subject_id','$title','$creator_id')";
            mysqli_query($db,$query);
        }
    }
    */
    /*
    $db = dbConnect();
    $query  = "SELECT * FROM tutorials";
    $result = mysqli_query($db,$query);

    foreach ($result as $item) {
        $id = $item['id'];
        $static_view = mt_rand(1000,1000000);
        $unique_view = mt_rand(100,10000);
        
        $query = "INSERT INTO tutorial_views VALUES ($id, '$static_view', '$unique_view')";
        mysqli_query($db,$query);
    }
    */

    //join 
    $query = "SELECT 
                    ur.name AS User_name,
                    ur.id AS User_id,
                    COUNT(tuto.id) AS Total_tutorial,
                    (
                        CASE WHEN 
                            COUNT(tuto.id) <= 30
                        THEN 
                            'Armature'
                        ELSE
                            'Genius'
                        END
                    ) AS Teacher_type,
                    SUM(tv.static_view) AS Total_static_view,
                    SUM(tv.unique_view) AS Total_unique_view,
                    sub.name AS Subject
                FROM users AS ur
                JOIN tutorials AS tuto
                ON ur.id = tuto.created_by
                JOIN tutorial_views AS tv
                ON tuto.id = tv.id  
                JOIN subjects AS sub
                ON tuto.subject_id = sub.id
                WHERE ur.creator = 4
                GROUP BY sub.id
    ";

    $result = mysqli_query(dbConnect(),$query);
    foreach ($result as $key=>$value) {
        print_r($key);
    }











