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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="admin.css">
    <title>Admin Panel</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
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
                    <a href="about.php" class="nav__link">
                        <i class="bx bx-book-bookmark nav__icon"></i>
                        <span class="nav__name">Skills</span>
                    </a>
                    <a href="service.php" class="nav__link">
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
                        <div class="float-left">
                            <h3>Edit Home Section</h3>
                        </div>
                        <form action="./edit.php?id=<?php echo $id;?>&action=edit-home" method="POST">
                        <?php
                                      $result=mysqli_query($con,"SELECT * from home");
                                      while($row=mysqli_fetch_assoc($result))
                                      {
                                    ?>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlInput1">Name</label>
                                <input Required name="home_newname" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['home_name'];?>" />
                            </div>
                           <div class="form-group mb-3">
                                <label for="exampleFormControlInput1">Job/Position</label>
                                <input Required name="home_newjob" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['home_job'];?>" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlInput1">Country</label>
                                <input Required name="home_newcountry" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['home_country'];?>" />
                            </div> 
                    </div>
                    <div class="float-left">
                            <h3>Edit Link Section</h3>
                        </div>
                        <br /><br />
                    <div class="col-md-12">
                    <div class="form-group mb-3">
                                        <label for="exampleFormControlInput1">Github Link</label>
                                        <input Required name="site_newgithub" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['site_link_github'];?>" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlInput1">Facebook Link</label>
                                        <input Required name="site_newfb" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['site_link_fb'];?>" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlInput1">Instagram Link</label>
                                        <input Required name="site_newig" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['site_link_ig'];?>" />
                                        
                                    </div>
                        </div>
                        <input type="submit" class="btn btn-success mt-2" value="Update" />             
                                        <?php
                                        }
                                        ?>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>