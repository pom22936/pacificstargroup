<?php 
    $dbcon = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b65d8c72f0f221","8a9fceb5245ea91","heroku_6739ef157d1165b") or die(mysqli_error());
    if (mysqli_connect_error()){
        echo"can't connext database";
    }
    mysqli_set_charset($dbcon,'utf8');


    $username = $_POST['inputuser'];
    $pwd = $_POST['inputPassword'];
    $email = $_POST['inputEmail'];

    $salt = "tercuyh565niuppoi250opi,yfcwtrbyiniu";
    $hash_login_password = hash_hmac('sha256',$pwd,$salt);

    $query = "INSERT INTO `user`(ID,`Username`, `pwd`, `EMAIL`, `Status`) VALUES ('','$username','$hash_login_password','$email','user')";
    $result = mysqli_query($dbcon,$query);
    echo $query;
   header("Location:../index.php");
    
?>