<?php 
    $con = mysqli_connect("localhost","root","poppom22936","final");
    mysqli_set_charset($con,"utf8");
    
    $del_name = $_GET['name'];
    // echo $del_name;
    @unlink("$del_name");

    $sql_delimg = "DELETE FROM `image` WHERE img_name = '$del_name'";
    // echo $sql_delimg;
    $query_delimg = mysqli_query($con,$sql_delimg);
    
    header("location:../Admin/Uplodeimg.php");
?>