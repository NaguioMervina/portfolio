<?php
  include ('../connection.php');
  if(!isset($_SESSION['username'])){
      header('location:./login.php');
}
//$id = $_GET['id'];
  $id = (isset($_POST['id']) ? $_POST['id'] : '');

// Edit Home section
if($_GET['action']=='edit-home'){

    $home_newname = $_POST['home_newname'];
    $home_newjob = $_POST['home_newjob'];
    $home_newcountry = $_POST['home_newcountry'];
    $site_newlink_fb = $_POST['site_newfb'];
    $site_newlink_github = $_POST['site_newgithub'];
    $site_newlink_ig = $_POST['site_newig'];
    

    $sql = "update home set home_name='$home_newname' , home_job='$home_newjob' , home_country='$home_newcountry' , 
    site_link_fb='$site_newlink_fb' , site_link_github='$site_newlink_github' , site_link_ig='$site_newlink_ig' 
    where home_id=1";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:./index.php");
    }else {
        echo "Failed";  
    }
}

//Edit About section
if ($_GET['action'] == 'edit-about') {
  $about_newtitle = $_POST['about_newtitle'];
  $about_newdesc = $_POST['about_newdesc'];

  if ($_FILES['about_newimg']['name'] !== '') {
    // A new image has been uploaded
    $random1 = rand(1111, 9999);
    $random2 = rand(1111, 9999);
    $random3 = $random1 . $random2;
    $random3 = md5($random3);

    $random_string = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 10);
    $file_name = $_FILES['about_newimg']['name'];
    $file_type = $_FILES['about_newimg']['type'];
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif']; // allowed image types

    // check if the file type is allowed
    if (!in_array($file_type, $allowed_types)) {
      exit();
    }

    $destination = '../upload_img/' . $random3 . $file_name;
    $destination_name = 'upload_img/' . $random3 . $file_name;

    if (move_uploaded_file($_FILES['about_newimg']['tmp_name'], $destination)) {
      $sql = "UPDATE about SET about_title='$about_newtitle', about_desc='$about_newdesc', about_img='$destination_name' WHERE about_id=1";
    } else {
      // File upload failed
      // Handle the error as appropriate
    }
  } else {
    // No new image has been uploaded
    $sql = "UPDATE about SET about_title='$about_newtitle', about_desc='$about_newdesc' WHERE about_id=1";
  }

  $result = mysqli_query($con, $sql);
  mysqli_query($con, "ALTER TABLE about AUTO_INCREMENT = 1");
  header("location: ./about.php");
}
?>