<?php 
    $dbcon = mysqli_connect("localhost","root","poppom22936","final") or die(mysqli_error());
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

     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$name_com' WHERE `vn`.`id` = 137;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$manu1' WHERE `vn`.`id` = 138;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$manu1_1' WHERE `vn`.`id` = 139;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$manu1_2' WHERE `vn`.`id` = 140;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$manu1_3' WHERE `vn`.`id` = 141;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$manu1_4' WHERE `vn`.`id` = 142;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$manu1_5' WHERE `vn`.`id` = 143;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$manu1_6' WHERE `vn`.`id` = 144;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$manu2' WHERE `vn`.`id` = 145;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$manu3' WHERE `vn`.`id` = 146;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$manu4' WHERE `vn`.`id` = 147;");
     mysqli_query($dbcon,"UPDATE `vn` SET `content` = '$manu5' WHERE `vn`.`id` = 148;");

     header('Location:../Admin/Herder_footer.php');
?>