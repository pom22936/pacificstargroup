<?php 
     $dbcon = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b65d8c72f0f221","8a9fceb5245ea91","heroku_6739ef157d1165b") or die(mysqli_error());
     if (mysqli_connect_error()){
         echo"can not connext Database";
     }
     mysqli_set_charset($dbcon,'utf8');

    $title_contact = $_POST['title_contact'];
    $topic_contect = $_POST['topic_contect'];
    $address_cont = $_POST['address_cont'];
    $address_cont_dt = $_POST['address_cont_dt'];
    $phone_cont = $_POST['phone_cont'];
    $phone_cont_dt = $_POST['phone_cont_dt'];
    $fax_cont = $_POST['fax_cont'];
    $fax_cont_dt = $_POST['fax_cont_dt'];
    $email_cont = $_POST['email_cont'];
    $email_cont_dt = $_POST['email_cont_dt'];
    $g_map_cont = $_POST['g_map_cont'];
    $cont_form = $_POST['cont_form'];
    $f_full_name = $_POST['f_full_name'];
    $pl_f_full_name = $_POST['pl_f_full_name'];
    $f_email = $_POST['f_email'];
    $pl_f_email = $_POST['pl_f_email'];
    $f_topic = $_POST['f_topic'];
    $pl_f_topic = $_POST['pl_f_topic'];
    $f_text = $_POST['f_text'];
    $f_submit = $_POST['f_submit'];

    mysqli_query($dbcon,"UPDATE `en` SET `content` = '$title_contact' WHERE `en`.`id` = 39;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$topic_contect' WHERE `en`.`id` = 40;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$address_cont' WHERE `en`.`id` = 41;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$address_cont_dt' WHERE `en`.`id` = 42;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$phone_cont' WHERE `en`.`id` = 43;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$phone_cont_dt' WHERE `en`.`id` = 44;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$fax_cont' WHERE `en`.`id` = 45;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$fax_cont_dt' WHERE `en`.`id` = 46;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$email_cont' WHERE `en`.`id` = 47;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$email_cont_dt' WHERE `en`.`id` = 48;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$g_map_cont' WHERE `en`.`id` = 49;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$cont_form' WHERE `en`.`id` = 50;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$f_full_name' WHERE `en`.`id` = 51;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$pl_f_full_name' WHERE `en`.`id` = 52;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$f_email' WHERE `en`.`id` = 53;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$pl_f_email' WHERE `en`.`id` = 54;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$f_topic' WHERE `en`.`id` = 55;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$pl_f_topic' WHERE `en`.`id` = 56;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$f_text' WHERE `en`.`id` = 57;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$f_submit' WHERE `en`.`id` = 58;");
    header('Location:../Admin/ContactAdmin.php');
?>