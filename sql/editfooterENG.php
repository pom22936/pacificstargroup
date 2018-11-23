<?php 
    $dbcon = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b65d8c72f0f221","8a9fceb5245ea91","heroku_6739ef157d1165b") or die(mysqli_error());
    if (mysqli_connect_error()){
        echo"can not connext Database";
    }
    mysqli_set_charset($dbcon,'utf8');

    $footer1 = $_POST['footer1'];
    $dt_footer1 = $_POST['dt_footer1'];
    $footer2 = $_POST['footer2'];
    $dt_footer2 = $_POST['dt_footer2'];
    $footer3 = $_POST['footer3'];
    $dt_footer3_1 = $_POST['dt_footer3_1'];
    $dt_footer3_2 = $_POST['dt_footer3_2'];
    $dt_footer3_3 = $_POST['dt_footer3_3'];
    $dt_footer3_4 = $_POST['dt_footer3_4'];
    $footer4 = $_POST['footer4'];


     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$footer1' WHERE `en`.`id` = 149;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_footer1' WHERE `en`.`id` = 150;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$footer2' WHERE `en`.`id` = 151;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_footer2' WHERE `en`.`id` = 152;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$footer3' WHERE `en`.`id` = 153;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_footer3_1' WHERE `en`.`id` = 154;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_footer3_2' WHERE `en`.`id` = 155;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_footer3_3' WHERE `en`.`id` = 156;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$dt_footer3_4' WHERE `en`.`id` = 157;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$footer4' WHERE `en`.`id` = 158;");

     header('Location:../Admin/Herder_footer.php');
?>