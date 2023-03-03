<?php
  include ('../connection.php');
  if(!isset($_SESSION['username'])){
    header('location:./login.php');
}
  $id = (isset($_POST['id']) ? $_POST['id'] : '');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Panel</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
        </div>
        <div class="header__img">
            <img src="images/about.jpg">
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class="bx bx-layer nav__logo-icon"></i>
                    <span class="nav__logo-name">Admin Panel</span>
                </a>
                <div class="nav__list">
                    <a href="#" class="nav__link active">
                        <i class="bx bx-home-circle nav__icon"></i>
                        <span class="nav__name">Home</span>
                    </a>
                    <a href="#" class="nav__link">
                        <i class="bx bx-book-bookmark nav__icon"></i>
                        <span class="nav__name">Skills</span>
                    </a>
                    <a href="#" class="nav__link">
                        <i class="bx bx-message-square-detail nav__icon"></i>
                        <span class="nav__name">Service</span>
                    </a>
                    <a href="#" class="nav__link">
                        <i class="bx bx-phone-call nav__icon"></i>
                        <span class="nav__name">Contact</span>
                    </a>
                </div>
            </div>
            <a href="logout.php" class="nav__link">
                <i class="bx bx-log-out nav__icon"></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="float-left">
                            <h3>Edit Home Section</h3>
                        </div>
                        <br /><br />
                        <form action="./edit.php?id=<?php echo $id;?>&action=edit-home" method="POST">
                        <?php
                                      $result=mysqli_query($con,"SELECT * from home where home_id=1;");
                                      while($row=mysqli_fetch_assoc($result))
                                      {
                                    ?>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Name</label>
                                <input Required name="home_newname" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['home_name'];?>" />
                            </div>
                           <div class="form-group">
                                <label for="exampleFormControlInput1">Job/Position</label>
                                <input Required name="home_newjob" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['home_job'];?>" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Country</label>
                                <input Required name="home_newcountry" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['home_country'];?>" />
                            </div> 
                    </div>
                    <input type="submit" class="btn btn-primary" value="Update" />
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Cancel
                  </button>
                  <?php
                }
                ?>
                    </form>

                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="main.js"></script>
</body>

</html>