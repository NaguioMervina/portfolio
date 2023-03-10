<?php
include ('../connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Login Form</h1>
            <div class="form-group">
                <label for="">Email/Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Email or Username" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
            </div>
            <input type="submit" name="submit" class="btn" value="Login">
        </form>
    </div>
    
    <!--login backend-->
    <?php
    if(isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        // $password = md5($password);
        
        $sql = mysqli_query($con, "SELECT * from admin_user where username = '$username' AND  password = '$password' limit 1");
        $row = mysqli_fetch_array($sql);
        if(is_array($row)) {
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
            echo "<script>alert('Login successful!')</script>";
            echo "<script>window.location.href='index.php';</script>";
        } else {
            $error = "Invalid email or password!";
            echo "<script>alert('$error')</script>";
            echo "<script>window.location.href='login.php?error=$error';</script>";
        }
    }
    if(isset($_SESSION["username"])) {
        header("location:index.php");
    }
    ?>
</body>
</html>