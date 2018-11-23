<?php 
    $dbcon = mysqli_connect("localhost","root","poppom22936","final") or die(mysqli_error());
    if (mysqli_connect_error()){
        echo"can not connext Database";
    }
    mysqli_set_charset($dbcon,'utf8');

    $title_incoterm = $_POST['title_incoterm'];
    $incoterm_detail = $_POST['incoterm_detail'];
    $ct1 = $_POST['ct1'];
    $dt_ct1 = $_POST['dt_ct1'];
    $ct2 = $_POST['ct2'];
    $dt_ct2 = $_POST['dt_ct2'];
    $ct3 = $_POST['ct3'];
    $dt_ct3 = $_POST['dt_ct3'];
    $ct4 = $_POST['ct4'];
    $dt_ct4 = $_POST['dt_ct4'];
    $ct5 = $_POST['ct5'];
    $dt_ct5 = $_POST['dt_ct5'];
    $ct6 = $_POST['ct6'];
    $dt_ct6 = $_POST['dt_ct6'];
    $ct7 = $_POST['ct7'];
    $dt_ct7 = $_POST['dt_ct7'];
    $ct8 = $_POST['ct8'];
    $dt_ct8 = $_POST['dt_ct8'];
    $ct9 = $_POST['ct9'];
    $dt_ct9 = $_POST['dt_ct9'];
    $ct10 = $_POST['ct10'];
    $dt_ct10 = $_POST['dt_ct10'];
    $ct11 = $_POST['ct11'];
    $dt_ct11 = $_POST['dt_ct11'];
    //จบ


     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$title_incoterm' WHERE `en`.`id` = 159;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$incoterm_detail' WHERE `en`.`id` = 160;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$ct1' WHERE `en`.`id` = 161;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ct1' WHERE `en`.`id` = 162;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$ct2' WHERE `en`.`id` = 163;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ct2' WHERE `en`.`id` = 164;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$ct3' WHERE `en`.`id` = 165;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ct3' WHERE `en`.`id` = 166;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$ct4' WHERE `en`.`id` = 167;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ct4' WHERE `en`.`id` = 168;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$ct5' WHERE `en`.`id` = 169;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ct5' WHERE `en`.`id` = 170;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$ct6' WHERE `en`.`id` = 171;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ct6' WHERE `en`.`id` = 172;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$ct7' WHERE `en`.`id` = 173;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ct7' WHERE `en`.`id` = 174;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$ct8' WHERE `en`.`id` = 175;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ct8' WHERE `en`.`id` = 176;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$ct9' WHERE `en`.`id` = 177;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ct9' WHERE `en`.`id` = 178;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$ct10' WHERE `en`.`id` = 179;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ct10' WHERE `en`.`id` = 180;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$ct11' WHERE `en`.`id` = 181;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_ct11' WHERE `en`.`id` = 182;");
     
    header('Location:../Admin/incotermAdmin.php');


    
?>