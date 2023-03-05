<?php
include ('../connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
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
            <p class="text-danger"><?php if(isset($_GET['error']))
                       echo $_GET['error'];
                        ?>
                 </p>
            <input type="submit" name="submit" class="btn" value="Login">
           <!-- <div>
                <span>Dont have an account?<a href="">register here</a></span>
            </div> -->
        </form>
    </div>
    
    <!--login backend-->
    <?php
if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
       // $password = md5($password);
       
$sql = mysqli_query($con, "SELECT * from admin_user where username = '$username' AND  password = '$password' limit 1");
$row = mysqli_fetch_array($sql);
        if(is_array($row)){
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
        } else{
            $error = "Invalid email or password!";
            header("Location:login.php?error=$error");
          // echo '<script type = "text/javascript">';
         //  echo 'alert("email or password not match");';
         //  echo 'window.location.href = "./login.php"';
          // echo '</script>';
        }
    }
    if(isset($_SESSION["username"])){
        header("location:index.php");
    }
?>
</body>

</html>