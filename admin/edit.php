<?php
  include ('../connection.php');
  if(!isset($_SESSION['username'])){
      header('location:./login.php');
}
  $id = (isset($_POST['id']) ? $_POST['id'] : '');
// Edit About Mission
if($_GET['action']=='edit-home'){

    $home_newname = $_POST['home_newname'];
    $home_newjob = $_POST['home_newjob'];
    $home_newcountry = $_POST['home_newcountry'];

    $sql = "update home set home_name='$home_newname' , home_job='$home_newjob' , home_country='$home_newcountry' where home_id=1";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:./index.php");
    }else {
        echo "Failed";
    }
}
?>