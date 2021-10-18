<?php

    include_once "sysgem/dbhacker.php";
    
    function insertPost($title,$type,$writer,$content,$image_link){
        $created_at = getTimeNow();
        $db = dbConnect();
        $query = "INSERT INTO posts (title,type,writer,content,image_link,created_at) VALUES ('$title','$type','$writer','$content','$image_link','$created_at')";
        $result = mysqli_query($db,$query);

        if($result){
            echo "post insert successfully";
        }else{
            echo "post insert fail";
        }
    }

    function getAllPost($type){
        $db = dbConnect();
        $query = '';
        if($type == 1){
            $query = "SELECT * FROM posts WHERE type = $type";

        }else{
            $query = "SELECT * FROM posts";

        }
        $result = mysqli_query($db,$query);
        return $result;
    }

    function getSinglePost($pid){
        $db = dbConnect();
        $query = "SELECT * FROM posts WHERE id=$pid";
        $result = mysqli_query($db,$query);
        return $result;
    }
?>