<?php
    include ('../connection.php');


// Update About Mission
if($_GET['action']=='upd-home'){
    $home_newname = $_POST['home_newname'];
    $home_newjob = $_POST['home_newjob'];
    $home_newcountry = $_POST['home_newcountry'];


    $sql = "insert into home(home_name, home_job, home_country) values('$home_name', '$home_job', '$home_country')";
    $result = mysqli_query($con, $sql);

    if($result){
       header("location:../index.php");
    }else {
        echo "Failed";
    }
}
?>
