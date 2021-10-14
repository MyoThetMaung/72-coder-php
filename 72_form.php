<?php

    if(isset($_GET['login'])){
        $email = $_GET['email'];
        $password = $_GET['password'];
        echo "your email is $email and ur password is $password";
    }

    if(isset($_POST['checkbox'])){
        if(isset($_POST['color'])){
            $colors = $_POST['color'];

            foreach ($colors as $color) {
                echo $color;
                echo "<br>";
            }
        }
    }

    if(isset($_GET['radio'])){
        $radio_item = $_GET['radio_item'];
        echo $radio_item;
    }

    if(isset($_POST['file'])){
        $file_name = $_FILES['file']['name'];
        $file_tmp_name = $_FILES['file']['tmp_name'];

        move_uploaded_file($file_tmp_name,"./images/$file_name");
    }

    if(isset($_POST['files'])){     
        foreach ($_FILES['files']['tmp_name'] as $key => $value) {
            $tmp_name = $_FILES['files']['tmp_name'][$key];
            $name = $_FILES['files']['name'][$key];
    
            move_uploaded_file($tmp_name,"./images/$name");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
        <h2>Log in Form</h2>
        <form action="<?php $_SELF_72_form ?>" method="get">
            <input type="text" name="email" placeholder="Username"> <br> <br>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="login" value="Register">
        </form> <hr>

        <h2>Check box selection</h2>
        <form action="<?php $_SELF_72_form ?>" method="post">
            <input type="checkbox" name="color[]" value="red"> Red <br><br>
            <input type="checkbox" name="color[]" value="yellow"> yellow <br><br>
            <input type="checkbox" name="color[]" value="green"> green <br><br>
            <input type="checkbox" name="color[]" value="blue"> blue <br><br>
            <input type="submit" name="checkbox" value="Check Color">
        </form> <hr>

        <h2>Radio check</h2>
        <form action="<?php $_SELF_72_form ?>" method="get">
            <input type="radio" name="radio_item" value="cat"> Cat
            <input type="radio" name="radio_item" value="dog"> Dog
            <input type="radio" name="radio_item" value="rabbit"> rabbit
            <input type="submit" name="radio" value="Radio check">
        </form> <hr>

        <h2>File upload</h2>
        <form action="<?php $_SELF_72_form ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="file" value="Upload file">
        </form><hr>

        <h2>Multiple file upload</h2>
        <form action="<?php $_SELF_72_form ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple>
            <input type="submit" name="files" value="Upload m_file">
        </form> <hr>
    

</body>
</html>

