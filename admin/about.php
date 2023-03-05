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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                        <a href="index.php" class="nav__link">
                            <i class="bx bx-home-circle nav__icon"></i>
                            <span class="nav__name">Home</span>
                        </a>
                        <a href="about.php" class="nav__link active">
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
                  <!-- DATA TABLE-->
                  <div class="float-left">
                    <h3>Edit About Section</h3>
                  </div>
                  <br /><br />
                  <form action="./edit.php?id=<?php echo $id;?>&action=edit-about" method="POST" enctype="multipart/form-data">
                                   <?php
                                      $query=mysqli_query($con,"SELECT * from about;");
                                      while($row=mysqli_fetch_assoc($query))
                                      {
                                    ?>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Title</label>
                      <input Required name="about_newtitle" type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $row['about_title'];?>"/>
                    </div>
                    <div class="form-group">
                      <input type="file" name="about_newimg" class="" value="<?php echo $row['about_img'];?>"/>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">
                        About Description
                     </label>
                      <textarea Required class="form-control" name="about_newdesc" id="exampleFormControlTextarea1" rows="5"><?php echo $row['about_desc'];?></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Update"/>
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
        </div>
        <script src="main.js"></script>
    </body>

    </html>