<?php 
    $dbcon = mysqli_connect("localhost","root","poppom22936","final") or die(mysqli_error());
    if (mysqli_connect_error()){
        echo"ไม่สามารถติดต่อฐานข้อมูลได้";
    }
    mysqli_set_charset($dbcon,'utf8');

    $id = $_POST['sent_id'];

    $sql_select= "SELECT * FROM `tb_new` WHERE id = $id";
    $sql_query_unlink = mysqli_query($dbcon,$sql_select);
    $res=mysqli_fetch_array($sql_query_unlink);
    echo $res['img'];
    @unlink($res['img']);

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

            $sql_edit = "UPDATE `tb_new` SET `img`='../News/$file_name',`topic`='$topic',`content`='$content' ,`topic_vn`='$topic_vn',`content_vn`='$content_vn' WHERE id=$id";
            $query_edit = mysqli_query($dbcon,$sql_edit);
            // echo $sql_edit;
        }
        // echo "Copy/Upload Complete"."</br>";
    }

    header("location:../Admin/AdminNews.php");
?>