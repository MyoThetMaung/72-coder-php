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
    session_start();
    include_once "sysgem/mysession.php";
    include_once "views/nav.php"; 
    include_once "views/header.php";
?>

    <div class="container my-3">
        <div class="row">
        <!-- side bar -->
        <?php include_once "views/sidebar.php"; ?>
       <!-- section -->
       <?php include_once "views/section.php"; ?>
        </div>
    </div>
 
    
<?php include_once "views/footer.php"; ?>


<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/tether.js"></script>
    
</body>
</html>










   



