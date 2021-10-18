<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog System</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
<body>
<?php
    include_once "views/nav.php";
    include_once "views/header.php";
    include_once "sysgem/mysession.php";
    include_once "sysgem/post_generator.php";

    if(checkSession("username")){
        if(getSession("username") != "waiferkolar"){
            header("Location:index.php");
        }else{
            header("Location:index.php");
        }
    }

    if(isset($_POST['submit'])){
        $post_title =  $_POST['post_title'];
        $post_type = $_POST['post_type'];
        $post_writer = $_POST['post_writer'];
        $post_content = $_POST['post_content'];

        $image_link = mt_rand(time(),time()) . "_" . $_FILES['file']['name'] .mt_rand(time(),time());
        move_uploaded_file($_FILES['file']['tmp_name'], "./assets/images/$image_link");
        
        $bol = insertPost($post_title,$post_type,$post_writer,$post_content,$image_link);
        if($bol){
            echo 'post successful';
        }else{
            echo 'post fail';
        }
    

    }

?>
<div class="container my-3" >
    <div class="row">
        <?php include_once "views/sidebar.php"; ?>
        <section class="col-md-9">
            <form action="" enctype="multipart/form-data" class="mb-5 table-bordered" action="admin.php" method="post">
            <h3 class="english text-danger text-center">Text Insert Form</h3>
                <div class="form-group">
                    <label for="post_title" class="english">Post Title</label>
                    <input type="email" class="form-control english" id="post_title" name="post_title" >
                </div>
                <div class="form-group">
                    <label for="post_type" class="english">Post Type</label>
                    <input type="text" class="form-control" name="post_type" id="post_type">
                        <option value="1">Free post</option>
                        <option value="2">Paid post</option>
                    </input>
                </div>
                <div class="form-group">
                    <label for="post_writer" class="english">Post writer</label>
                    <input type="text" class="form-control english" id="post_writer" name="post_writer">
                </div>
                <div class="form-group">
                    <lable class="custom-file">
                        <input type="file" id="file" name="file" class="custom-file-input" >
                        <span class="custom-file-control"></span>
                    </lable>
                </div>
                <div class="form-group">
                    <label for="post_content" class="english">Post Content</label>
                    <textarea class="form-control english" id="post_content" name="post_content"></textarea>
                </div>
                <div class="row no-gutters justify-content-end">
                    <button class="btn btn-outline-primary mr-2">Cancel</button>
                    <button class="btn btn-primary" type="submit">Post</button>
                </div>
               
            </form>
        </section>

    </div>
</div>


<?php include_once "views/footer.php"; ?>
<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/tether.js"></script>
    
</body>
</html>
