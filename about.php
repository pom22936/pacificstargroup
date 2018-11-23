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
//--------image-------------
if(!empty($_POST['img35'])){
    $data = $_POST['img35'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 35";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img36'])){
    $data = $_POST['img36'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 36";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img37'])){
    $data = $_POST['img37'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 37";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img38'])){
    $data = $_POST['img38'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 38";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img39'])){
    $data = $_POST['img39'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 39";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img40'])){
    $data = $_POST['img40'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 40";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img41'])){
    $data = $_POST['img41'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 41";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img42'])){
    $data = $_POST['img42'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 42";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img43'])){
    $data = $_POST['img43'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 43";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img44'])){
    $data = $_POST['img44'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 44";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img45'])){
    $data = $_POST['img45'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 45";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
}
if(!empty($_POST['img46'])){
    $data = $_POST['img46'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 46";
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
        <?=$title_about;?>
    </title>
    <link rel="icon" type="image/่jpg" href="/uploads/PACIFIC STAR GROUP_logo.jpg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/manu_parallax.css">
    <script src="js/script.js"></script>
    <script>
        var about1 = $("#about1").position();
        var about2 = $("#about2").position();
        var about3 = $("#about3").position();
        var about4 = $("#about4").position();
        var about5 = $("#about5").position();
        var about6 = $("#about6").position();

        $('.link1').click(function() {
            $('html, body').animate({
            scrollTop: about1.top
            }, 500);
            return false;
        }); 

        $('.dropdown-item #ct2').click(function() {
            $('html, body').animate({
            scrollTop: about2.top
            }, 500);
            return false;
        }); 
    </script>
</head>

<body class="parallax">
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
    <br><br><br>

    <div>
        <div class="carousel-item active">
            <?php 
        $sql_select = "SELECT * FROM `select_img` where id = 35"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
        $query_select = mysqli_query($con,$sql_select);
        $row_save = mysqli_fetch_array($query_select);

        $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
        $query_img = mysqli_query($con,$sql_img);
        while($row_img =  mysqli_fetch_array($query_img)){
        ?>
            <img src="<?php echo substr($row_img['img_name'],3);?>" class="img_herder" alt="Mock up" width="1530" height="500">
            <?php } ?>
            <div class="carousel-caption d-none d-md-block">
                <div style="background-color:#f0f0f0; opacity:0.8; width:200px; height:80px; padding-top:12px; ">
                    <h1 style="color:#000000;">ABOUT US</h1>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div>
        <div class="container" style="background-color:#ffffff; border-radius: 25px;">
            <center>
                <h1 style="font-size: 69px;">
                    <?=$topic_about;?>
                </h1> <br>
                <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 36"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                <img src="<?php echo substr($row_img['img_name'],3);?>" alt="PACIFIC STAR GROUP" style="max-width: 100%; height: 250px;">
                <?php } ?>
                <br><br>
                <h2 style="font-size: 52px;">
                    <?=$idiom_about;?>
                </h2><br><br>
            </center>
        </div>
    </div>

    <div id="about1" class="container" style="background-color:#ffffff; border-radius: 25px;">
        <div class="row">
            <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                <h1>INTRODUCTION</h3><br>
                    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <?=$dt_ab1;?>
                    </p>
            </div>
            <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                <p>
                    <h2>VDO Presentation</h2>
                    <div class="embed-responsive embed-responsive-16by9" >
                    <iframe class="embed-responsive-item" width="500" height="300" src="https://www.youtube.com/embed/hEf44O5zReI" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div><br><br>
                    <h3>Contact Us</h3>
                    <?=$dt_ab2;?>
                </p>
            </div>
        </div>
    </div>


    <br><br>
    <div>
        <div id="about2" class="container" style="background-color:#ffffff; border-radius: 25px; padding:25px;">
            <h2>
                <?=$tp_ab_ct1;?>
            </h2>
            <div class="row">
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 37"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                    <img src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" alt="air port" height="250"
                        width="500">
                    <?php } ?>
                </div>
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <p>&nbsp &nbsp &nbsp
                        <?=$dt_ab_ct1;?>
                    </p>
                </div>
            </div>
        </div>
        <br><br>
        <div id="about3" class="container" style="background-color:#ffffff; border-radius: 25px; padding:25px;">
            <h1>
                <?=$tp_ab_ct2;?>
            </h1>
            <div class="row">
                <!-- company1 -->
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <p>&nbsp &nbsp &nbsp
                        <?=$dt_ab_ct2;?>
                    </p>
                </div>
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 38"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                <center>
                    <img src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" alt="air port" height="250" width="350">
                </center>
                <?php } ?>
                    <p align="center"><b>Pacific Star Logistics Co.,Ltd (PASL)</b></p>
                </div>
                <!-- company2 -->
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 39"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                <center>
                    <img src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" alt="air port" height="250" width="400">
                </center>
                    <?php } ?>
                    <p align="center"><b>Vietstar Shipping Agency Co.,Ltd (VSSA)</b></p>
                </div>
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <p>&nbsp &nbsp &nbsp
                        <?php echo $detail_com2;?>
                    </p>
                </div>
                <!-- company3 -->
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <p>&nbsp &nbsp &nbsp
                        <?php echo $detail_com3;?>
                    </p>
                </div>
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 40"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                <center>
                    <img src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" alt="air port" height="250" width="500">
                </center>
                    <?php } ?>
                    <p align="center"><b>PACIFIC STAR AVIATION AGENCY (PASA)</b></p>
                </div>
                <!-- company4 -->
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 41"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                <center>
                    <img src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" alt="air port" height="250" width="400">
                </center>
                    <?php } ?>
                    <p align="center"><b>Binh Tuong Company ltd.,</b></p>
                </div>
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <p>&nbsp &nbsp &nbsp
                        <?php echo $detail_com4;?>
                    </p>
                </div>
                <!-- company5 -->
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <p>&nbsp &nbsp &nbsp
                        <?php echo $detail_com5;?>
                    </p>
                </div>
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 42"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                <center>
                      <img src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" alt="air port" height="250" width="400">
                </center>
                    <?php } ?>
                    <p align="center"><b>Amasis Shipping Co.,Ltd</b></p>
                </div>
                <!-- company6 -->
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 43"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                <center>
                     <img src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" alt="air port" height="250" width="300">
                </center>
                    <?php } ?>
                    <p align="center"><b>V&H Trading Co.,Ltd</b></p>
                </div>
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <p>&nbsp &nbsp &nbsp
                        <?php echo $detail_com6;?>
                    </p>
                </div>
            </div>
        </div>
        <br><br>
        <div id="about4" class="container" style="background-color:#ffffff; border-radius: 25px; padding:25px;">
            <h1>
                Principal of our Member
            </h1> <br>
            <div align="center">
                <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 44"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                <img src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" alt="">
                <?php } ?>
            </div>
        </div>
        <br><br>
        <div id="about5" class="container" style="background-color:#ffffff; border-radius: 25px; padding:25px;">
            <h1>Strategic Partners </h1>
            <div align="center">
                <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 45"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                <img src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" alt="">
                <?php } ?>
            </div>
        </div>
        <br><br>
        <div id="about6" class="container" style="background-color:#ffffff; border-radius: 25px; padding:25px;">
            <h2>
                <?=$tp_ab_ct3;?>
            </h2>
            <div class="row">
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <?php 
                $sql_select = "SELECT * FROM `select_img` where id = 46"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                $query_select = mysqli_query($con,$sql_select);
                $row_save = mysqli_fetch_array($query_select);

                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                $query_img = mysqli_query($con,$sql_img);
                while($row_img =  mysqli_fetch_array($query_img)){
                ?>
                    <img src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" alt="air port" height="250"
                        width="500">
                    <?php } ?>
                </div>
                <div class="col-lg-6 portfolio-item" style="padding: 25px;">
                    <p>&nbsp &nbsp &nbsp
                        <?php echo $dt_ab_ct3;?>
                    </p>
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
        </div>
    </footer>
    <div style="background-color:#000000;  color:#ffffff;">
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