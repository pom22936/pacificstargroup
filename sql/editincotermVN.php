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
 
 
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$title_incoterm' WHERE `vn`.`id` = 159;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$incoterm_detail' WHERE `vn`.`id` = 160;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$ct1' WHERE `vn`.`id` = 161;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt_ct1' WHERE `vn`.`id` = 162;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$ct2' WHERE `vn`.`id` = 163;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt_ct2' WHERE `vn`.`id` = 164;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$ct3' WHERE `vn`.`id` = 165;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt_ct3' WHERE `vn`.`id` = 166;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$ct4' WHERE `vn`.`id` = 167;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt_ct4' WHERE `vn`.`id` = 168;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$ct5' WHERE `vn`.`id` = 169;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt_ct5' WHERE `vn`.`id` = 170;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$ct6' WHERE `vn`.`id` = 171;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt_ct6' WHERE `vn`.`id` = 172;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$ct7' WHERE `vn`.`id` = 173;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt_ct7' WHERE `vn`.`id` = 174;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$ct8' WHERE `vn`.`id` = 175;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt_ct8' WHERE `vn`.`id` = 176;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$ct9' WHERE `vn`.`id` = 177;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt_ct9' WHERE `vn`.`id` = 178;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$ct10' WHERE `vn`.`id` = 179;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt_ct10' WHERE `vn`.`id` = 180;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$ct11' WHERE `vn`.`id` = 181;");
      mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt_ct11' WHERE `vn`.`id` = 182;");
      
     header('Location:../Admin/incotermAdmin.php');
 
?>