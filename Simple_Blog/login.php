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
    include_once "sysgem/mysession.php";
    include_once "sysgem/membership.php";
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $ret = loginUser($email,$password);
        $message = '';
        switch ($ret) {
            case "login success":
                $message = "login success";
                if(getSession("username")  === "waiferkolar" && getSession("email") === "waiferkolar@gamil.com"){
                    header("Location: admin.php");
                }else{
                    header("Location: index.php");
                }
                break;
            case "login fail":
                $message = "login fail";
                break;
            case "Auth fail!":
                $message = "Username and password are not in format!";
                break;
            default:
        }
        echo $message;
    }
?>

    <div class="container my-3">
        <div class="col-md-8 offset-md-2 table-bordered p-5">
            <h1>Login to see special posts</h1>
            <form action="login.php" class="form mb-3" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" >
                </div>
                <div class="form-group">
                    <input type="submit" id="submit" name="submit" class="form-control btn btn-seconday" value="Login" >
                </div>
            </form>
  
    
        </div>
    </div>
 
    
<?php include_once "views/footer.php"; ?>


<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/tether.js"></script>
    
</body>
</html>










   



