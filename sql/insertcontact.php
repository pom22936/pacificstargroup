<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $dbcon = mysqli_connect("localhost","root","poppom22936","final") or die(mysqli_error());
    if (mysqli_connect_error()){
        echo"can not connext Database";
    }
    mysqli_set_charset($dbcon,'utf8');

    $FullName = $_POST['FullName'];
    $Email = $_POST['exampleInputEmail1'];
    $Topic = $_POST['Topic'];
    $Text = $_POST['Text'];

    $sql ="INSERT INTO `contact`( `fullname`, `email`, `topic`, `text`) VALUES ('$FullName','$Email','$Topic','$Text')";
    mysqli_query($dbcon,$sql);
    header('Location:../contact.php');



    define('LINE_API',"https://notify-api.line.me/api/notify");
    define('LINE_TOKEN','8FbF3oPLqAVv8FBx2rKLwvGcfJcDototrWawwmfRpuU');

function notify_message($message){

    $queryData = array('message' => $message);
    $queryData = http_build_query($queryData,'','&');
    $headerOptions = array(
        'http'=>array(
            'method'=>'POST',
            'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
            		  ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                      ."Content-Length: ".strlen($queryData)."\r\n",
            'content' => $queryData
        )
    );
    $context = stream_context_create($headerOptions);
    $result = file_get_contents(LINE_API,FALSE,$context);
    $res = json_decode($result);
	return $res;
}
$res = notify_message('Contacted from the web site.'.'topic : '.$Topic.'detail : '.$Text);
// var_dump($res);


    require '../vendor/autoload.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'palm22936@gmail.com';                 // SMTP username เจ้าของ mail
    $mail->Password = 'poppom22936';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', $Topic);//หัวข้อ
    $mail->addAddress($Email, 'ADMIN PASL');     // Add a recipient //ส่งถึงใคร
    $mail->addReplyTo('vincent@vssa.com.vn', 'Return Information');//ตอบกลับถึง...
    $mail->addCC('vincent@vssa.com.vn');//สำเนา
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $Topic;
    $mail->Body    = $Text;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

?>