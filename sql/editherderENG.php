<?php 
    $dbcon = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b65d8c72f0f221","8a9fceb5245ea91","heroku_6739ef157d1165b") or die(mysqli_error());
    if (mysqli_connect_error()){
        echo"can not connext Database";
    }
    mysqli_set_charset($dbcon,'utf8');

    $name_com = $_POST['name_com'];
    $manu1 = $_POST['manu1'];
    $manu1_1 = $_POST['manu1_1'];
    $manu1_2 = $_POST['manu1_2'];
    $manu1_3 = $_POST['manu1_3'];
    $manu1_4 = $_POST['manu1_4'];
    $manu1_5 = $_POST['manu1_5'];
    $manu1_6 = $_POST['manu1_6'];
    $manu2 = $_POST['manu2'];
    $manu3 = $_POST['manu3'];
    $manu4 = $_POST['manu4'];
    $manu5 = $_POST['manu5'];

     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$name_com' WHERE `en`.`id` = 137;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$manu1' WHERE `en`.`id` = 138;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$manu1_1' WHERE `en`.`id` = 139;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$manu1_2' WHERE `en`.`id` = 140;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$manu1_3' WHERE `en`.`id` = 141;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$manu1_4' WHERE `en`.`id` = 142;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$manu1_5' WHERE `en`.`id` = 143;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$manu1_6' WHERE `en`.`id` = 144;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$manu2' WHERE `en`.`id` = 145;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$manu3' WHERE `en`.`id` = 146;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$manu4' WHERE `en`.`id` = 147;");
     mysqli_query($dbcon,"UPDATE `en` SET `content` = '$manu5' WHERE `en`.`id` = 148;");

     header('Location:../Admin/Herder_footer.php');
?>