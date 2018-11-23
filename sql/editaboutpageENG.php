<?php 
    $dbcon = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b65d8c72f0f221","8a9fceb5245ea91","heroku_6739ef157d1165b") or die(mysqli_error());
    if (mysqli_connect_error()){
        echo"can not connext Database";
    }
    mysqli_set_charset($dbcon,'utf8');

    $title_about = $_POST['title_about'];
    $topic_about = $_POST['topic_about'];
    $idiom_about = $_POST['idiom_about'];
    $dt_ab1 = $_POST['dt_ab1'];
    $dt_ab2 = $_POST['dt_ab2'];
    $tp_ab_ct1 = $_POST['tp_ab_ct1'];
    $dt_ab_ct1 = $_POST['dt_ab_ct1'];
    $tp_ab_ct2 = $_POST['tp_ab_ct2'];
    $dt_ab_ct2 = $_POST['dt_ab_ct2'];
    $tp_ab_ct3 = $_POST['tp_ab_ct3'];
    $dt_ab_ct3 = $_POST['dt_ab_ct3'];
    //เพื่มเติม รอบที่ 1
    $dt_ab_com2 = $_POST['dt_ab_com2'];
    $dt_ab_com3 = $_POST['dt_ab_com3'];
    $dt_ab_com4 = $_POST['dt_ab_com4'];
    $dt_ab_com5 = $_POST['dt_ab_com5'];
    $dt_ab_com6 = $_POST['dt_ab_com6'];
    //จบ


     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$title_about' WHERE `en`.`id` = 28;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$topic_about' WHERE `en`.`id` = 29;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$idiom_about' WHERE `en`.`id` = 30;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ab1' WHERE `en`.`id` = 31;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ab2' WHERE `en`.`id` = 32;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$tp_ab_ct1' WHERE `en`.`id` = 33;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ab_ct1' WHERE `en`.`id` = 34;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$tp_ab_ct2' WHERE `en`.`id` = 35;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ab_ct2' WHERE `en`.`id` = 36;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$tp_ab_ct3' WHERE `en`.`id` = 37;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ab_ct3' WHERE `en`.`id` = 38;");
     //เพื่มเติมรอบที่1
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ab_com2' WHERE `en`.`id` = 132;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ab_com3' WHERE `en`.`id` = 133;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ab_com4' WHERE `en`.`id` = 134;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ab_com5' WHERE `en`.`id` = 135;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ab_com6' WHERE `en`.`id` = 136;");
     //จบการเพื่มเติม
    header('Location:../Admin/AboutAdmin.php');


    
?>