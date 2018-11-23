<?php 
$con = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b65d8c72f0f221","8a9fceb5245ea91","heroku_6739ef157d1165b");
mysqli_set_charset($con,"utf8");

$topic = $_POST['topic'];
$content = $_POST['content'];
$topic_vn = $_POST['topic_vn'];
$content_vn = $_POST['content_vn'];

if(isset($_FILES["photos"]))
    {
        foreach($_FILES['photos']['tmp_name'] as $key => $val)
        {   
            $file_name = $_FILES['photos']['name'][$key];
            $file_tmp =$_FILES['photos']['tmp_name'][$key]; 
            move_uploaded_file($file_tmp,'../News/'.$file_name);

            $qye = "INSERT INTO  tb_new  VALUE ('','../News/$file_name','$topic','$content','$topic_vn','$content_vn')";//เพื่มข้อมูล
            $result = mysqli_query($con,$qye);
            echo $qye;
        }
        echo "Copy/Upload Complete"."</br>";
    }
    header("location:../Admin/AdminNews.php");
?>