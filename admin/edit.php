<?php
  include ('../connection.php');

$id = $_GET['id'];
// Edit About Mission
if($_GET['action']=='edit-home'){

    $home_newname = $_POST['home_newname'];
    $home_newjob = $_POST['home_newjob'];
    $home_newcountry = $_POST['home_newcountry'];

    $sql = "update home set home_name='$home_newname' , home_job='$home_newjob' , home_country='$home_newcountry' where home_id";
    $result=mysqli_query($con,$sql);

    if($result){
       header("location:./index.php");
    }else {
        echo "Failed";
    }
}
?>