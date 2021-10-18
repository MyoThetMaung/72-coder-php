<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog System</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <style>
    .myListGroup > .list-group-item{
        border-radius: 0;
    }
    .myListGroup > .list-group-item > a{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    .myListGroup > .list-group-item > a:hover{
        color: #000;
        text-decoration: none;
    }
</style>
<body>

<?php 
    session_start();
    include_once "sysgem/mysession.php";
    include_once "sysgem/dbhacker.php";
    include_once "views/nav.php"; 
    include_once "views/header.php";
    include_once "sysgem/post_generator.php";
    if(isset($_GET['pid'])){
        $pid = $_GET['pid'];
    }
?>


    <div class="container my-3">
        <div class="card col-md-8 offset-md-2">

            <div class="card-header">
                <?php 
                    $result = getSinglePost($pid);
                    foreach ($result as $key) {
                        echo "<div class='card-header'>".$key["title"]."<span>".$key["created-at"]."</span></div>";
                        echo "<img src='assets/images/".$key["image_link"]." alt=''>";
                        echo "<div class='card-block'>".$key["content"]."</div>";
                        echo "<div class='card-footer'>".$key["writer"]."</div>";
                    }
                ?>
            </div>    

        </div>
    </div>
 
    
<?php include_once "views/footer.php"; ?>


<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/tether.js"></script>
    
</body>
</html>










   



