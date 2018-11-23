<?php 
$con = mysqli_connect("localhost","root","poppom22936","final");
mysqli_set_charset($con,"utf8");

if(isset($_FILES["photos"]))
    {
        foreach($_FILES['photos']['tmp_name'] as $key => $val)
        {   
            $file_name = $_FILES['photos']['name'][$key];
            $file_tmp =$_FILES['photos']['tmp_name'][$key]; 
            move_uploaded_file($file_tmp,'../uploads/'.$file_name);

            $qye = "INSERT INTO  image  VALUE ('','../uploads/$file_name')";//เพื่มข้อมูล
            $result = mysqli_query($con,$qye);
            
        }
        echo "Copy/Upload Complete"."</br>";
    }
    

    header("location:../Admin/UplodeImg.php");
?>