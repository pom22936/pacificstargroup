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
//-------image---------------
if(!empty($_POST['img47'])){
    $data = $_POST['img47'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 47";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img48'])){
    $data = $_POST['img48'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 48";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?=$title_service;?>
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
    <!-- <script>
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
            </div>
        </nav>
    <br><br>

    <div>
        <div class="carousel-item active">
            <?php 
        $sql_select = "SELECT * FROM `select_img` where id = 47"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
        $query_select = mysqli_query($con,$sql_select);
        $row_save = mysqli_fetch_array($query_select);

        $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
        $query_img = mysqli_query($con,$sql_img);
        while($row_img =  mysqli_fetch_array($query_img)){
        ?>
            <img src="<?php echo substr($row_img['img_name'],3);?>" class="img_herder" alt="Los Angeles" width="1520" height="450">
            <?php }?>
            <div class="carousel-caption d-none d-md-block">
                <div style="background-color:#f0f0f0; opacity:0.8; width:200px; height:80px; padding-top:12px; ">
                    <h1 style="color:#000000;">SERVICE</h1>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color:#F0F8FF;">
        <br>
        <div class="container" style="background-color:#ffffff; padding:25px; border-radius: 25px;">
            <h1><b>
                    <?=$topic_ct_service1;?></b></h1>
            <br><br>
            <div class="row">
                <div class="col-lg-6 col-sm-6 portfolio-item" style="pedding:15px;">
                    <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 48"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                    <img class="card-img-top" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                    <?php } ?>
                </div>
                <div class="col-lg-6 col-sm-6 portfolio-item" style="pedding:15px;">
                    <p>&nbsp &nbsp &nbsp
                        <?=$detail_ct_service1;?>
                    </p>
                </div>
            </div>
        </div><br><br><br>
        <div class="parallax" style=" padding:25px;">
            <div class="container">
                <h2>
                    <?=$topic_ct_service2;?>
                </h2>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 ">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                                href="#list-home" role="tab" aria-controls="home">
                                <?=$topic_A;?></a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                                href="#list-profile" role="tab" aria-controls="profile">
                                <?=$topic_B;?></a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                                href="#list-messages" role="tab" aria-controls="messages">
                                <?=$topic_C;?></a>
                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
                                href="#list-settings" role="tab" aria-controls="settings">
                                <?=$topic_D;?></a>
                            <a class="list-group-item list-group-item-action" id="list-test-list" data-toggle="list"
                                href="#list-test" role="tab" aria-controls="test">
                                <?=$topic_E;?></a>
                            <a class="list-group-item list-group-item-action" id="list-test2-list" data-toggle="list"
                                href="#list-test2" role="tab" aria-controls="test2">
                                <?=$topic_F;?></a>
                            <a class="list-group-item list-group-item-action" id="list-test3-list" data-toggle="list"
                                href="#list-test3" role="tab" aria-controls="test3">
                                <?=$topic_G;?></a>
                            <a class="list-group-item list-group-item-action" id="list-test4-list" data-toggle="list"
                                href="#list-test4" role="tab" aria-controls="test4">
                                <?=$topic_H;?></a>
                            <a class="list-group-item list-group-item-action" id="list-test5-list" data-toggle="list"
                                href="#list-test5" role="tab" aria-controls="test5">
                                <?=$topic_I;?></a>
                            <a class="list-group-item list-group-item-action" id="list-test6-list" data-toggle="list"
                                href="#list-test6" role="tab" aria-controls="test6">
                                <?=$topic_K;?></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6">
                        <div class="tab-content" id="nav-tabContent" style="background-color:#ffffff; padding:20px; border-radius: 25px;">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                <p>
                                    <?=$detail_A;?>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                <p>
                                    <?=$detail_B;?>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                                <span>
                                    <?=$detail_C;?>
                                    <ul>
                                        <li>
                                            <?=$sup_topic_C1;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_C2;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_C3;?>
                                        </li>
                                    </ul>
                                </span>
                            </div>
                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                                <p>
                                    <?=$detail_D;?>
                                    <ul>
                                        <li>
                                            <?=$sup_topic_D1;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_D2;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_D3;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_D4;?>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-test" role="tabpanel" aria-labelledby="list-test-list">
                                <p>
                                    <?=$detail_E;?>
                                    <ul>
                                        <li>
                                            <?=$sup_topic_E1;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_E2;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_E3;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_E4;?>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-test2" role="tabpanel" aria-labelledby="list-test-list2">
                                <p>
                                    <?=$detail_F;?>
                                    <ul>
                                        <li>
                                            <?=$sup_topic_F1;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_F2;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_F3;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_F4;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_F5;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_F6;?>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-test3" role="tabpanel" aria-labelledby="list-test-list3">
                                <p>
                                    <?=$detail_G;?>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-test4" role="tabpanel" aria-labelledby="list-test-list4">
                                <p>
                                    <?=$detail_H;?>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-test5" role="tabpanel" aria-labelledby="list-test-list5">
                                <p>
                                    <ul>
                                        <li>
                                            <?=$sup_topic_I1;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_I2;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_I3;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_I4;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_I5;?>
                                        </li>
                                        <li>
                                            <?=$sup_topic_I6;?>
                                        </li>
                                    </ul>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="list-test6" role="tabpanel" aria-labelledby="list-test-list6">
                                <p>
                                    <?=$detail_K;?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="container">
            <center>
                <h2 style="padding:5px;">
                    <?=$topic_ct_service3;?>
                </h2><br>
            </center>
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">
                            <?=$topic_price1;?>
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- <h1 class="card-title pricing-card-title"><?php $price1;?></h1> -->
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>
                                <?=$detail_price1_1;?>
                            </li>
                            <hr>
                            <li>
                                <?=$detail_price1_2;?>
                            </li>
                            <hr>
                            <li>
                                <?=$detail_price1_3;?>
                            </li>
                            <hr>
                            <li>
                                <?=$detail_price1_4;?>
                            </li>
                            <hr>
                        </ul>
                        <a href="contact.php" type="button" class="btn btn-lg btn-block btn-outline-primary">Contact us</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">
                            <?=$topic_price2;?>
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- <h1 class="card-title pricing-card-title"><?php $price2;?></h1> -->
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>
                                <?=$detail_price2_1;?>
                            </li>
                            <hr>
                            <li>
                                <?=$detail_price2_2;?>
                            </li>
                            <hr>
                            <li>
                                <?=$detail_price2_3;?>
                            </li>
                            <hr>
                            <li>
                                <?=$detail_price2_4;?>
                            </li>
                            <hr>
                        </ul>
                        <a href="contact.php" type="button" class="btn btn-lg btn-block btn-outline-primary">Contact us</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">
                            <?=$topic_price3;?>
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- <h1 class="card-title pricing-card-title"><?php $price3;?></h1> -->
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>
                                <?=$detail_price3_1;?>
                            </li>
                            <hr>
                            <li>
                                <?=$detail_price3_2;?>
                            </li>
                            <hr>
                            <li>
                                <?=$detail_price3_3;?>
                            </li>
                            <hr>
                            <li>
                                <?=$detail_price3_4;?>
                            </li>
                            <hr>
                        </ul>
                        <a href="contact.php" type="button" class="btn btn-lg btn-block btn-outline-primary">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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