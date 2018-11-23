<?php 
    $con = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b65d8c72f0f221","8a9fceb5245ea91","heroku_6739ef157d1165b");
    mysqli_set_charset($con,"utf8");
    
    $del = $_GET['denew_id'];

    $sql_select = "SELECT * FROM `tb_new` WHERE id = $del";
    $que_select = mysqli_query($con,$sql_select);
    $res = mysqli_fetch_array($que_select);
    @unlink($res['img']);

    $sql_del = "DELETE FROM `tb_new` WHERE id = $del";
    $query_del = mysqli_query($con,$sql_del);

    header("location:../Admin/AdminNews.php");
?>