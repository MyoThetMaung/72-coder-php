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
    include_once "sysgem/membership.php";
    include_once "sysgem/mysession.php";

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ret = registerUser($username, $email, $password);
        $message = "";
        switch ($ret) {
            case "Register successful":
                echo $message = "Register successful";
                setSession('username',$username);
                setSession('email',$email);
                setSession('password',$password);
                header("Location: index.php");
                break;
            case "Register fail":
                echo $message = "Register fail";
                break;
            case "email is already in user!":
                echo $message = "email is already in user!";
                break;
            case "fail":
                echo $message = "fail";
                break;
            case "success":
                echo $message = "success";
                break;
            default:
                break;
        }
        echo $message;
    }
    

?>


    <div class="container my-3">
        <div class="col-md-8 offset-md-2 table-bordered p-5">
            <h1>Register to be members</h1>
            <form action="register.php" class="form mb-3" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="username" id="username" name="username" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" >
                </div>
                <div class="form-group">
                    <input type="submit" id="submit" name="submit" class="form-control btn btn-seconday" value="Submit" >
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










   



