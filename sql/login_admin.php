<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php 
    $dbcon = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b65d8c72f0f221","8a9fceb5245ea91","heroku_6739ef157d1165b") or die(mysqli_error());
    if (mysqli_connect_error()){
        echo"can't connext database";
    }
    mysqli_set_charset($dbcon,'utf8');

    $login_username = mysqli_real_escape_string($dbcon,$_POST['inputUser']);//รับค่าจากผู้ใช้ที่กรอก
     $login_password = mysqli_real_escape_string($dbcon,$_POST['inputPassword']);

     $salt = "tercuyh565niuppoi250opi,yfcwtrbyiniu";
     $hash_login_password = hash_hmac('sha256',$login_password,$salt);//เข้ารหัส

     $sql = "SELECT * FROM user WHERE Username=? AND pwd=?";//ดึงค่าจากตารางมา รอรับค่าพารามิทเตอร์
     $stmt =mysqli_prepare($dbcon,$sql);//สร้างพารามิเตอร์ให้กับ sql และป้องกัน sql inject
     mysqli_stmt_bind_param($stmt,"ss",$login_username,$hash_login_password);//ส่งพารามิเตอร์
     mysqli_execute($stmt);//รัน คล้ายๆ query
     $result_user = mysqli_stmt_get_result($stmt);//ดึงผลลัพธ์จาก execute
    //  swal({
    //     title: 'Error',
    //     text: 'Username or Password is wrong',
    //     icon: 'warning',
    //     button: 'OK!',
    //     closeOnCancel: true,
    //   });
     
     
     if($result_user->num_rows ==1){//ถ้าผลลัพธ์ ถูกต้อง ค่าที่ส่งมาจากตารางจะเป็น 1 แถว
        session_start();//เก็บตัวแปร ไว้ใช่เพจ อื่นๆ
        $row_user = mysqli_fetch_array($result_user);//จะดึงค่า id
        if($row_user['Status'] == "ADMIN") {
            $_SESSION['ID'] = $row_user['ID'];//ดึง window.location.href = 'https://www.pacificstargroup.local/Admin/login.php';
            header('Location:../Admin/dashborad.php');
        }
     } else {
         echo "<script>
         alert('Username or Password is wrong');
          window.location.href = 'https://www.pacificstargroup.local/Admin/login.php';
         </script>";
     }
?>
</body>
</html>