<?php 
     $dbcon = mysqli_connect("localhost","root","poppom22936","final") or die(mysqli_error());
     if (mysqli_connect_error()){
         echo"can not connext Database";
     }
     mysqli_set_charset($dbcon,'utf8');

     $title_index = $_POST['title_index'];
     $topic_index_content1 = $_POST['topic_index_content1'];
     $detail_index_content1 = $_POST['detail_index_content1'];
     $st1_ct1 = $_POST['st1_ct1'];
     $dt1_ct1 = $_POST['dt1_ct1'];
     $st2_ct1 = $_POST['st2_ct1'];
     $dt2_ct1 = $_POST['dt2_ct1'];
     $st3_ct1 = $_POST['st3_ct1'];
     $dt3_ct1 = $_POST['dt3_ct1'];
     $topic_index_content2 = $_POST['topic_index_content2'];
     $detail_index_content2 = $_POST['detail_index_content2'];
     $st1_ct2 = $_POST['st1_ct2'];
     $dt1_ct2 = $_POST['dt1_ct2'];
     $st2_ct2 = $_POST['st2_ct2'];
     $dt2_ct2 = $_POST['dt2_ct2'];
     $st3_ct2 = $_POST['st3_ct2'];
     $dt3_ct2 = $_POST['dt3_ct2'];
     $topic_index_content3 = $_POST['topic_index_content3'];
     $detail_index_content3 = $_POST['detail_index_content3'];
     $topic_index_content4 = $_POST['topic_index_content4'];
     $topic_index_content5 = $_POST['topic_index_content5'];
     $st1_ct5 = $_POST['st1_ct5'];
     $dt1_ct5 = $_POST['dt1_ct5'];
     $st2_ct5 = $_POST['st2_ct5'];
     $dt2_ct5 = $_POST['dt2_ct5'];
     $st3_ct5 = $_POST['st3_ct5'];
     $dt3_ct5 = $_POST['dt3_ct5'];

      //เพื่มเติมครั่งที่ 1
    $st4_ct2 = $_POST['st4_ct2'];
    $dt4_ct2 = $_POST['dt4_ct2'];
    $st4_ct5 = $_POST['st4_ct5'];
    $dt4_ct5 = $_POST['dt4_ct5'];
    $st5_ct5 = $_POST['st5_ct5'];
    $dt5_ct5 = $_POST['dt5_ct5'];
    $st6_ct5 = $_POST['st6_ct5'];
    $dt6_ct5 = $_POST['dt6_ct5'];
    //จบการเพื่มเติม


     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$title_index' WHERE `vn`.`id` = 1;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$topic_index_content1' WHERE `vn`.`id` = 2;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$detail_index_content1' WHERE `vn`.`id` = 3;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st1_ct1' WHERE `vn`.`id` = 4;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt1_ct1' WHERE `vn`.`id` = 5;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st2_ct1' WHERE `vn`.`id` = 6;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt2_ct1' WHERE `vn`.`id` = 7;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st3_ct1' WHERE `vn`.`id` = 8;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt3_ct1' WHERE `vn`.`id` = 9;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$topic_index_content2' WHERE `vn`.`id` = 10;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$detail_index_content2' WHERE `vn`.`id` = 11;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st1_ct2' WHERE `vn`.`id` = 12;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt1_ct2' WHERE `vn`.`id` = 13;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st2_ct2' WHERE `vn`.`id` = 14;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt2_ct2' WHERE `vn`.`id` = 15;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st3_ct2' WHERE `vn`.`id` = 16;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt3_ct2' WHERE `vn`.`id` = 17;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$topic_index_content3' WHERE `vn`.`id` = 18;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$detail_index_content3' WHERE `vn`.`id` = 19;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$topic_index_content4' WHERE `vn`.`id` = 20;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$topic_index_content5' WHERE `vn`.`id` = 21;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st1_ct5' WHERE `vn`.`id` = 22;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt1_ct5' WHERE `vn`.`id` = 23;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st2_ct5' WHERE `vn`.`id` = 24;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt2_ct5' WHERE `vn`.`id` = 25;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st3_ct5' WHERE `vn`.`id` = 26;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt3_ct5' WHERE `vn`.`id` = 27;");

     //เพื่มเติมครั่งที่ 1
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st4_ct2' WHERE `vn`.`id` = 124;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt4_ct2' WHERE `vn`.`id` = 125;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st4_ct5' WHERE `vn`.`id` = 126;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt4_ct5' WHERE `vn`.`id` = 127;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st5_ct5' WHERE `vn`.`id` = 128;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt5_ct5' WHERE `vn`.`id` = 129;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$st6_ct5' WHERE `vn`.`id` = 130;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$dt6_ct5' WHERE `vn`.`id` = 131;");
     //จบการเพื่มเติม
    header('Location:../Admin/dashborad.php');
?>