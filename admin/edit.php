<?php
  include ('../connection.php');
  if(!isset($_SESSION['username'])){
      header('location:./login.php');
}
//$id = $_GET['id'];
  $id = (isset($_POST['id']) ? $_POST['id'] : '');

// Edit About Mission
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

//About section edits
if($_GET['action']=='edit-about'){
  $random1 = rand(1111,9999);
  $random2 = rand(1111,9999);
  $random3 = $random1.$random2;
  $random3 = md5($random3);
  $about_newtitle = $_POST['about_newtitle'];
  $about_newdesc = $_POST['about_newdesc'];
  $about_newimg = $_POST['about_newimg'];

  $file_name = $_FILES['about_newimg']['name'];
  $destination = '../upload_img/'.$random3.$file_name;
  $destination_name = 'upload_img/'.$random3.$file_name;
  move_uploaded_file($_FILES['about_newimg']['tmp_name'],$destination);

  $sql = "update about set about_title='$about_newtitle', about_desc='$about_newdesc', about_img='$destination_name' where about_id=1";

  $result = mysqli_query($con, $sql);

  mysqli_query($con, "alter table about AUTO_INCREMENT = 1");
  
  header("location:./about.php");
}
?>