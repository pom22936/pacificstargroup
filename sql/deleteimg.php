<?php 
    $con = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b65d8c72f0f221","8a9fceb5245ea91","heroku_6739ef157d1165b");
    mysqli_set_charset($con,"utf8");
    
    $del_name = $_GET['name'];
    // echo $del_name;
    @unlink("$del_name");

    $sql_delimg = "DELETE FROM `image` WHERE img_name = '$del_name'";
    // echo $sql_delimg;
    $query_delimg = mysqli_query($con,$sql_delimg);
    
    header("location:../Admin/Uplodeimg.php");
?>