<?php
session_start();
if(empty($_SESSION["lang"])){
    header('Location:change.php?lang=EN');
}
if($_SESSION["lang"] == "EN")
{
	include("lang/en.php");
}
else
{
	include("lang/vn.php");
}
//------image-------------
if(!empty($_POST['img49'])){
    $data = $_POST['img49'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 49";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img50'])){
    $data = $_POST['img50'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 50";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?=$title_contact;?>
    </title>
    <link rel="icon" type="image/่jpg" href="/uploads/PACIFIC STAR GROUP_logo.jpg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/manu_parallax.css">
    <script src="js/script.js"></script>
</head>

<body>
<!-- <script src="https://sp.zalo.me/plugins/sdk.js"></script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
            appId            : '1948498265442988',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.11'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
            <div class="fb-customerchat"  page_id="573046396208213"></div> -->


            <div class="icon-bar">
            <a href="https://www.facebook.com/Pacific-Star-Group-Vietnam-745001085551278/" class="facebook"><i class="fa fa-facebook"></i></a> 
            <a href="tel:+84862904666" class="twitter"><i class="fa fa-phone-square"></i></a> 
            <a href="mailto:vincent@vssa.com.vn" class="google"><i class="fa fa-google"></i></a> 
            <a href="change.php?lang=EN" class="linkedin"><img src="uploads/uk.png" alt="" height="20" width="20"></a>
            <a href="change.php?lang=VN" class="youtube"><img src="uploads/vn.ico" alt="" height="20" width="20"></a> 
            </div>
        
        <nav class="navbar navbar-expand-lg  navbar-light fixed-top" style="background-image: linear-gradient(#66CCFF, #ffffff); color:#000000;">
        <a class="navbar-brand" href="index.php"><img src="uploads/PACIFIC STAR GROUP_logo.jpg" alt="logo" style="width: 50px;height: 50px;">&nbsp&nbsp <?=$name_com; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?=$manu1; ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" stype="border-radius:25px;">
                <a class="dropdown-item" href="about.php?#about1"><?=$manu1_1; ?></a>
                <a class="dropdown-item" href="about.php?#about2"><?=$manu1_2; ?></a>
                <a class="dropdown-item" href="about.php?#about3"><?=$maun1_3; ?></a>
                <a class="dropdown-item" href="about.php?#about4"><?=$manu1_4; ?></a>
                <a class="dropdown-item" href="about.php?#about5"><?=$manu1_5; ?></a>
                <a class="dropdown-item" href="about.php?#about6"><?=$manu1_6; ?></a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service1.php"><?=$manu2; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="New.php"><?=$manu3; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="incoterm.php"><?php echo $manu4; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php"><?=$manu5; ?></a>
            </li>
            </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
                    <!-- &nbsp &nbsp <a href="#" class="badge badge-primary" id="stlogin">SING UP</a> -->
                    <!-- &nbsp <a href="mailto:vincent@vssa.com.vn" style="font-size: 40px;"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    &nbsp <a href="tel:+84862904666" style="font-size: 40px;"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                    &nbsp<a href="uploads/PACIFIC STAR GROUP_logo.jpg" style="font-size: 40px;"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> -->
                    &nbsp &nbsp<a href="change.php?lang=VN" style="color:#000000; font-size: 23px;">VN |</a>
                     &nbsp<a href="change.php?lang=EN" style="color:#000000; font-size: 23px;"> EN </a>
                     <!-- <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script> -->
                     &nbsp<span class="skype-button rounded" data-contact-id="amy.ngoc" data-text="Skype Contect"></span>
            </div>
        </nav>
    <br><br>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div>
        <div class="carousel-item active">
            <?php 
        $sql_select = "SELECT * FROM `select_img` where id = 49"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
        $query_select = mysqli_query($con,$sql_select);
        $row_save = mysqli_fetch_array($query_select);

        $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
        $query_img = mysqli_query($con,$sql_img);
        while($row_img =  mysqli_fetch_array($query_img)){
        ?>
            <img src="<?php echo substr($row_img['img_name'],3);?>" class="img_herder" alt="team" width="1520" height="450">
        <?php } ?>
            <div class="carousel-caption d-none d-md-block">
                <div style="background-color:#f0f0f0; opacity:0.8; width:300px; height:100px; padding-top:25px; ">
                    <h1 style="color:#000000;">
                        <?=$topic_contect;?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:#F0F8FF; padding:25px;">
        <div class="container" style="background-color:#ffffff; padding:15px; border-radius: 25px;">
            <div class="row">
                <div class="col-lg-6 portfolio-item">
                    <h2>PACIFIC STAR GROUP</h2>
                    <?php 
                    $sql_select = "SELECT * FROM `select_img` where id = 50"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                    $query_select = mysqli_query($con,$sql_select);
                    $row_save = mysqli_fetch_array($query_select);

                    $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                    $query_img = mysqli_query($con,$sql_img);
                    while($row_img =  mysqli_fetch_array($query_img)){
                    ?>
                    <img src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" alt="Mock up" width="500" height="350">
                    <?php } ?>
                </div>
                <div class="col-lg-6 portfolio-item" style="border-left:5px solid #000;">
                    <br><br>
                    <p><b>
                            <?=$address_cont;?></b>
                        <?=$address_cont_dt;?>
                    </p>
                    <hr>
                    <p><b>
                            <?=$phone_cont;?></b>
                        <?=$phone_cont_dt;?>
                    </p>
                    <hr>
                    <p><b>
                            <?=$fax_cont;?></b>
                        <?=$fax_cont_dt;?>
                    </p>
                    <hr>
                    <p><b>
                            <?=$email_cont;?></b>
                        <?=$email_cont_dt;?>
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax" style="padding:10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div style="background-color:#4267B2; padding:10px; color:#ffffff;">
                        <?=$g_map_cont;?>
                    </div>
                    <div class="embed-responsive embed-responsive-1by1" >
                        <iframe class="embed-responsive-item" src="map.php" width="540" height="600"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div style="background-color:#4267B2; padding:10px; color:#ffffff;">
                        <?=$cont_form;?>
                    </div>
                    <div style="background-color:#f2f2f2; padding:15px; border-radius: 15px;">
                        <form action="sql/insertcontact.php" method="POST">
                            <div class="form-group">
                                <label for="FullName">
                                    <?=$f_full_name;?></label>
                                <input type="text" class="form-control" id="FullName" name="FullName" aria-describedby="FullName"
                                    placeholder="<?=$pl_f_full_name;?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                    <?=$f_email;?></label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="<?=$pl_f_email;?>">
                            </div>
                            <div class="form-group">
                                <label for="Topic">
                                    <?=$f_topic;?></label>
                                <input type="text" class="form-control" id="Topic" name="Topic" placeholder="<?=$pl_f_topic;?>">
                            </div>
                            <div class="form-group">
                                <label for="Text">
                                    <?=$f_text;?></label>
                                <textarea class="form-control" rows="6" id="Text" name="Text"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <?=$f_submit;?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>


    <footer>
        <div style="background-image: linear-gradient(#ffffff, #66CCFF); padding:1.5%; color:#000000;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item">
                        <h3><i class="fa fa-user-circle " aria-hidden="true">
                                <?=$footer1; ?></i></h3>
                        <p>
                            <?=$detail_footer1; ?>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item">
                        <h3><i class="fa fa-envelope-open-o" aria-hidden="true">
                                <?=$footer2; ?></i></h3>
                        <p>
                            <?=$detail_footer2; ?>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item">
                        <h3><i class="fa fa-comments-o" aria-hidden="true">
                                <?=$footer3; ?></i></h3>
                        <ul>
                            <li>
                                <?=$detail_footer3_1; ?>
                            </li>
                            <li>
                                <?=$detail_footer3_2; ?>
                            </li>
                            <li>
                                <?=$detail_footer3_3; ?>
                            </li>
                            <li>
                                <?=$detail_footer3_4; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item">
                        <h3><i class="fa fa-globe" aria-hidden="true">
                                <?=$footer4; ?></i></h3>
                        <iframe style="border-radius: 50px 20px;" src="map.php" width="280" height="180"></iframe>
                    </div>
                </div>
            </div>
    </footer>
    <div style="background-color:#000000; color:#ffffff;">
        <p style="margin:0%;" align="left">Copyright © PALM PHONGSAKON Website 2018</p>
    </div>
    <!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "745001085551278", // Facebook page ID
            call_to_action: "Hello, how may we help you?", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
</body>

</html>