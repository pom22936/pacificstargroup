<?php
session_start();
include("lang/img.php");
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
// -----------image-----------------
    if(!empty($_POST['slide1'])){
    $data = $_POST['slide1'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 63";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['slide2'])){
    $data = $_POST['slide2'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 64";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['slide3'])){
    $data = $_POST['slide3'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 65";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img6'])){
    $data = $_POST['img6'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 6";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img7'])){
    $data = $_POST['img7'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 7";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img8'])){
    $data = $_POST['img8'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 8";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img9'])){
    $data = $_POST['img9'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 9";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img10'])){
    $data = $_POST['img10'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 10";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img11'])){
    $data = $_POST['img11'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 11";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img12'])){
    $data = $_POST['img12'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 12";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img13'])){
    $data = $_POST['img13'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 13";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img14'])){
    $data = $_POST['img14'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 14";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img15'])){
    $data = $_POST['img15'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 15";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img16'])){
    $data = $_POST['img16'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 16";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img17'])){
    $data = $_POST['img17'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 17";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img18'])){
    $data = $_POST['img18'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 18";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img19'])){
    $data = $_POST['img19'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 19";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img20'])){
    $data = $_POST['img20'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 20";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img21'])){
    $data = $_POST['img21'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 21";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img22'])){
    $data = $_POST['img22'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 22";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img23'])){
    $data = $_POST['img23'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 23";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img24'])){
    $data = $_POST['img24'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 24";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img25'])){
    $data = $_POST['img25'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 25";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img26'])){
    $data = $_POST['img26'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 26";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img27'])){
    $data = $_POST['img27'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 27";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img28'])){
    $data = $_POST['img28'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 28";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img29'])){
        $data = $_POST['img29'];
        $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 29";
        $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img30'])){
    $data = $_POST['img30'];
    $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 30";
    $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img31'])){
        $data = $_POST['img31'];
        $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 31";
        $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img32'])){
        $data = $_POST['img32'];
        $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 32";
        $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img33'])){
        $data = $_POST['img33'];
        $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 33";
        $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

    if(!empty($_POST['img34'])){
        $data = $_POST['img34'];
        $sql_save = "UPDATE `select_img` SET`img_id`=$data WHERE id = 34";
        $query_save = mysqli_query($con,$sql_save);//update value in table save
    }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title_index;?></title>
    <link rel="icon" type="image/่jpg" href="/uploads/PACIFIC STAR GROUP_logo.jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/manu_parallax.css">
    <script src="js/script.js"></script>
</head>

<body >
<!-- <div class="zalo-chat-widget" data-oaid="1875627121889732210" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div> -->

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
                     <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>
                     &nbsp<span class="skype-button rounded" data-contact-id="amy.ngoc" data-text="Skype Contect"></span>
            </div>
        </nav>
  
    
    <br><br>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                    <?php 
                        $sql_select = "SELECT * FROM `select_img` where id = 63"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                        $query_select = mysqli_query($con,$sql_select);
                        $row_save = mysqli_fetch_array($query_select);

                        $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                        $query_img = mysqli_query($con,$sql_img);
                        while($row_img =  mysqli_fetch_array($query_img)){
                    ?>
                <img src="<?php echo substr($row_img['img_name'],3);?>" class="img_herder" alt="Los Angeles" height="650" width="2200">
                        <?php } ?>
                <div class="carousel-caption d-none d-md-block" >
                    <div class="rounded mx-auto d-block" style="background-color:#f0f0f0; opacity:0.8; width:200px; height:80px; padding-top:10px; display:none;">
                        <h1  style="color:#000000;"><?php echo substr($st1_ct5,35);?></h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                    <?php 
                        $sql_select = "SELECT * FROM `select_img` where id = 64"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                        $query_select = mysqli_query($con,$sql_select);
                        $row_save = mysqli_fetch_array($query_select);

                        $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                        $query_img = mysqli_query($con,$sql_img);
                        while($row_img =  mysqli_fetch_array($query_img)){
                    ?>
                <img src="<?php echo substr($row_img['img_name'],3);?>" class="img_herder" alt="Chicago" height="650" width="2200">
                <?php } ?>
                <div class="carousel-caption d-none d-md-block">
                    <div class="rounded mx-auto d-block" style="background-color:#f0f0f0; opacity:0.8; width:200px; height:80px; margin:auto; padding-top:10px; display:none;">
                        <h1  style="color:#000000;"><?php echo substr($st2_ct5,31);?></h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                    <?php 
                        $sql_select = "SELECT * FROM `select_img` where id = 65"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                        $query_select = mysqli_query($con,$sql_select);
                        $row_save = mysqli_fetch_array($query_select);

                        $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                        $query_img = mysqli_query($con,$sql_img);
                        while($row_img =  mysqli_fetch_array($query_img)){
                    ?>
                <img src="<?php echo substr($row_img['img_name'],3);?>" class="img_herder" alt="New York" height="650" width="2200">
                <?php } ?>
                <div class="carousel-caption d-none d-md-block">
                    <div class="rounded mx-auto d-block" style="background-color:#f0f0f0; opacity:0.8; width:200px; height:80px;  margin-left: 830px; padding-top:10px; display:none;">
                        <h1  style="color:#000000;"><?php echo substr($st5_ct5,0,6);?></h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- end slide -->

    <!-- Datial -->
    <div>
        <div class="container" style="padding:25px; ">
            <div class="row">
                <div class="col-lg-6 portfolio-item">
                    <h2 style="font-size: 35px;"><?=$topic_index_content1;?></h2>
                    <p style="font-size: 20px;"><?=$detail_index_content1;?></p>
                    <div>
                        <h3><i class="fa fa-address-book" aria-hidden="true"> <?=$st1_ct1;?></i></h3>
                        <p><?=$dt1_ct1;?></p>
                    </div>
                    <div>
                        <h3><i class="fa fa-check" aria-hidden="true"> <?=$st2_ct1;?></i></h3>
                        <p><?=$dt2_ct1;?></p>
                    </div>
                    <div>
                        <h3><i class="fa fa-users" aria-hidden="true"> <?=$st3_ct1;?></i></h3>
                        <p><?=$dt3_ct1;?></p>
                    </div>
                </div>
                <div class="col-lg-6 portfolio-item">
                    <?php 
                        $sql_select = "SELECT * FROM `select_img` where id = 6"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                        $query_select = mysqli_query($con,$sql_select);
                        $row_save = mysqli_fetch_array($query_select);

                        $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                        $query_img = mysqli_query($con,$sql_img);
                        while($row_img =  mysqli_fetch_array($query_img)){
                    ?>
                    <img  src="<?php echo substr($row_img['img_name'],3);?>" class="img-fluid" id="show" style="width: 600px; height:450px;">
                        <?php }?>
                </div>
            </div>
        </div>
        <!-- end Detial -->

        <!-- Service -->
        <div class="slide" style="background-color:#F0F8FF; height:610px;" >
            <div class="container" style="padding:25px;">
                <center>
                    <h2 style="font-size: 35px; "><?=$topic_index_content2;?></h2>
                    <p><?=$detail_index_content2;?></p>
                </center>
            </div>
            <div  style="padding:25px;">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 portfolio-item">
                        <div class="card h-100" id="ct1">
                        <?php 
                            $sql_select = "SELECT * FROM `select_img` where id = 7"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                            $query_select = mysqli_query($con,$sql_select);
                            $row_save = mysqli_fetch_array($query_select);

                            $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                            $query_img = mysqli_query($con,$sql_img);
                            while($row_img =  mysqli_fetch_array($query_img)){
                        ?>
                            <a href="service1.php"><img class="card-img-top " src="<?php echo substr($row_img['img_name'],3);?>" alt=""></a>
                        <?php } ?>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="service1.php"><?=$st1_ct2;?></a>
                                </h4>
                                <p class="card-text"><?=$dt1_ct2;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio-item">
                        <div class="card h-100" id="ct2">
                            <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 8"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                            ?>
                            <a href="service1.php"><img class="card-img-top" src="<?php echo substr($row_img['img_name'],3);?>" alt=""></a>
                            <?php } ?>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="service1.php"><?=$st2_ct2;?></a>
                                </h4>
                                <p class="card-text"><?=$dt2_ct2;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio-item">
                        <div class="card h-100" id="ct3">
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 9"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                            <a href="service1.php"><img class="card-img-top" src="<?php echo substr($row_img['img_name'],3);?>" alt=""></a>
                            <?php } ?>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="service1.php"><?=$st3_ct2;?></a>
                                </h4>
                                <p class="card-text"><?=$dt3_ct2;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 portfolio-item">
                        <div class="card h-100" id="ct4">
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 10"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                            <a href="service1.php"><img class="card-img-top" src="<?php echo substr($row_img['img_name'],3);?>" alt=""></a>
                            <?php } ?>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="service1.php"><?=$st4_ct2;?></a>
                                </h4>
                                <p class="card-text"><?=$dt4_ct2;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Service -->
            <!-- parallax -->

            <div class="parallax">
                <div class="container" style="color:#000000; padding-top:200px;">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <center>
                                <div style="background-color:#f0f0f0; padding:25px; opacity:0.8;">
                                    <h1><?=$topic_index_content3;?></h1>
                                    <h3><?=$detail_index_content3;?></h3>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!--end parallax -->

            <!--PORTFOLIO-->
            <div style="background-color:#F0F8FF; ">
                <div class="container slide">
                    <header class="main-header clearfix">
                        <img class="logo" src="uploads/PACIFIC STAR GROUP_logo.jpg" height="50" width="50">
                        <h1 class="name"><?=$topic_index_content4;?></h1>
                    </header>

                    <div class="content clearfix">

                        <div class="cube-container">
                            <div class="photo-cube">
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 11"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="front" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                                <div class="back photo-desc">
                                    <h3>IMAGE FROM</h3>
                                    <p>VIET STAR SHIPPING AGENCY CO., LTD. (VSSA)</p>
                                    <a href="https://vssa.com.vn/" class="button">www.vssa.com.vn</a>
                                </div>
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 12"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="left" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 13"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="right" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                            </div>
                        </div>

                        <div class="cube-container">
                            <div class="photo-cube">
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 14"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="front" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                                <div class="back photo-desc">
                                    <h3>IMAGE FROM</h3>
                                    <p>PACIFIC STAR LOGISTICS CO. ,LTD (PASL)</p>
                                    <a href="http://www.pasl.com.vn/el/?frame=content&name=aboutus" class="button">www.pasl.com.vn</a>
                                </div>
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 15"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="left" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 16"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="right" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                            </div>
                        </div>

                        <div class="cube-container">
                            <div class="photo-cube">
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 17"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="front" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                                <div class="back photo-desc">
                                    <h3>IMAGE FROM</h3>
                                    <p>BINH TUONG COMPANY LTD.</p>
                                    <a href="http://www.bituco.com.vn/" class="button">www.bituco.com.vn</a>
                                </div>
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 18"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="left" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 19"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="right" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div style="background-color:#F0F8FF; ">
                <div class="container">
                    <div class="content clearfix">
                        <div class="cube-container">
                            <div class="photo-cube">
                                <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 20"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="front" src="<?php echo substr($row_img['img_name'],3);?>" alt="" style="background-color:#ffffff;">
                                <?php } ?>
                                    <div class="back photo-desc">
                                        <h3>IMAGE FROM</h3>
                                        <p>Pacific Star Aviation Agency (PASA)</p>
                                        <a href="http://www.pasa.com.vn/" class="button">www.pasa.com.vn</a>
                                    </div>
                                <?php 
                                    $sql_select = "SELECT * FROM `select_img` where id = 21"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                    $query_select = mysqli_query($con,$sql_select);
                                    $row_save = mysqli_fetch_array($query_select);

                                    $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                    $query_img = mysqli_query($con,$sql_img);
                                    while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="left" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                                <?php 
                                    $sql_select = "SELECT * FROM `select_img` where id = 22"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                    $query_select = mysqli_query($con,$sql_select);
                                    $row_save = mysqli_fetch_array($query_select);

                                    $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                    $query_img = mysqli_query($con,$sql_img);
                                    while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="right" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="cube-container">
                            <div class="photo-cube">
                                <?php 
                                    $sql_select = "SELECT * FROM `select_img` where id = 23"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                    $query_select = mysqli_query($con,$sql_select);
                                    $row_save = mysqli_fetch_array($query_select);

                                    $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                    $query_img = mysqli_query($con,$sql_img);
                                    while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="front" src="<?php echo substr($row_img['img_name'],3);?>" alt="" style="background-color:#ffffff;">
                                <?php } ?>
                                    <div class="back photo-desc">
                                        <h3>IMAGE FROM</h3>
                                        <p>Amasis Shipping Co., Ltd</p>
                                        <a href="http://www.amss.com.vn/" class="button">www.amss.com.vn</a>
                                    </div>
                                <?php 
                                    $sql_select = "SELECT * FROM `select_img` where id = 24"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                    $query_select = mysqli_query($con,$sql_select);
                                    $row_save = mysqli_fetch_array($query_select);

                                    $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                    $query_img = mysqli_query($con,$sql_img);
                                    while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                    <img class="left" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                                <?php 
                                    $sql_select = "SELECT * FROM `select_img` where id = 25"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                    $query_select = mysqli_query($con,$sql_select);
                                    $row_save = mysqli_fetch_array($query_select);

                                    $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                    $query_img = mysqli_query($con,$sql_img);
                                    while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                    <img class="right" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="cube-container">
                            <div class="photo-cube">
                                <?php 
                                    $sql_select = "SELECT * FROM `select_img` where id = 26"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                    $query_select = mysqli_query($con,$sql_select);
                                    $row_save = mysqli_fetch_array($query_select);

                                    $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                    $query_img = mysqli_query($con,$sql_img);
                                    while($row_img =  mysqli_fetch_array($query_img)){
                                ?>
                                <img class="front" src="<?php echo substr($row_img['img_name'],3);?>" alt="" style="background-color:#ffffff;">
                                <?php } ?>
                                    <div class="back photo-desc">
                                        <h3>IMAGE FROM</h3>
                                        <p>Vi Ha Trading Co., Ltd</p>
                                        <a href="http://vhtrading.com.vn/" class="button">www.vhtrading.com.vn</a>
                                    </div>
                                    <?php 
                                    $sql_select = "SELECT * FROM `select_img` where id = 27"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                    $query_select = mysqli_query($con,$sql_select);
                                    $row_save = mysqli_fetch_array($query_select);

                                    $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                    $query_img = mysqli_query($con,$sql_img);
                                    while($row_img =  mysqli_fetch_array($query_img)){
                                    ?>
                                    <img class="left" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                    <?php } ?>
                                    <?php 
                                    $sql_select = "SELECT * FROM `select_img` where id = 28"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                    $query_select = mysqli_query($con,$sql_select);
                                    $row_save = mysqli_fetch_array($query_select);

                                    $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                    $query_img = mysqli_query($con,$sql_img);
                                    while($row_img =  mysqli_fetch_array($query_img)){
                                    ?>
                                    <img class="right" src="<?php echo substr($row_img['img_name'],3);?>" alt="">
                                    <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- end PORTFOLIO-->

            <!-- TEAM-->
            <div style="background-color:#ffffff;">
                <div class="container">
                    <br><br>
                    <h1><?=$topic_index_content5;?></h1><br>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card h-100 text-center">
                            <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 29"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                            ?>
                                <img class="card-img-top" src="<?php echo substr($row_img['img_name'],3);?>" alt="" height="200" width="150">
                            <?php } ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?=$st1_ct5;?></h4>
                                    <hr>
                                    <p class="card-text"><?=$dt1_ct5;?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="https://vssa.com.vn/">www.vssa.com.vn</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card h-100 text-center">
                            <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 30"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                            ?>
                                <img class="card-img-top" src="<?php echo substr($row_img['img_name'],3);?>" alt="" height="200" width="150">
                            <?php } ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?=$st2_ct5;?></h4>
                                    <hr>
                                    <p class="card-text"><?=$dt2_ct5;?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="http://www.pasl.com.vn/el/?frame=content&name=aboutus">www.pasl.com.vn</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card h-100 text-center">
                            <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 31"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                            ?>
                                <img class="card-img-top" src="<?php echo substr($row_img['img_name'],3);?>" alt="" height="200" width="150">
                            <?php } ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?=$st3_ct5;?></h4>
                                    <hr>
                                    <p class="card-text"><?=$dt3_ct5;?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="http://www.bituco.com.vn/">www.bituco.com.vn</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card h-100 text-center">
                            <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 32"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                            ?>
                                <img class="card-img-top" src="<?php echo substr($row_img['img_name'],3);?>" alt="" height="200" width="150">
                            <?php } ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?=$st4_ct5;?></h4>
                                    <hr>
                                    <p class="card-text"><?=$dt4_ct5;?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="http://www.pasa.com.vn/">www.pasa.com.vn</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card h-100 text-center">
                            <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 33"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                            ?>
                                <img class="card-img-top" src="<?php echo substr($row_img['img_name'],3);?>" alt="" height="200" width="150">
                                <?php } ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?=$st5_ct5;?></h4>
                                    <hr>
                                    <p class="card-text"><?=$dt5_ct5;?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="http://www.amss.com.vn/">www.amasis.com.vn</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card h-100 text-center">
                            <?php 
                                $sql_select = "SELECT * FROM `select_img` where id = 34"; //เลือกค่าทุกอย่างจาก table save ใน id 1 ที่เราทำการเปลี่ยนจาก ul
                                $query_select = mysqli_query($con,$sql_select);
                                $row_save = mysqli_fetch_array($query_select);

                                $sql_img = "SELECT * FROM `image` where imageID = $row_save[img_id]";
                                $query_img = mysqli_query($con,$sql_img);
                                while($row_img =  mysqli_fetch_array($query_img)){
                            ?>
                                <img class="card-img-top" src="<?php echo substr($row_img['img_name'],3);?>" alt="" height="200" width="150">
                                <?php } ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?=$st6_ct5;?></h4>
                                    <hr>
                                    <p class="card-text"><?=$dt6_ct5;?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="http://vhtrading.com.vn/">www.vhtrading.com.vn</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END TEAM-->
            <footer>
                <div style="background-image: linear-gradient(#ffffff, #66CCFF); padding:1.5%; color:#000000;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item">
                                <h3><i class="fa fa-user-circle " aria-hidden="true"> <?=$footer1; ?></i></h3>
                                <p><?=$detail_footer1; ?></p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item">
                                <h3><i class="fa fa-envelope-open-o" aria-hidden="true"> <?=$footer2; ?></i></h3>
                                <p><?=$detail_footer2; ?></p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item">
                                <h3><i class="fa fa-comments-o" aria-hidden="true"> <?=$footer3; ?></i></h3>
                                <ul>
                                    <li><?=$detail_footer3_1; ?></li>
                                    <li><?=$detail_footer3_2; ?></li>
                                    <li><?=$detail_footer3_3; ?></li>
                                    <li><?=$detail_footer3_4; ?></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item">
                                <h3><i class="fa fa-globe" aria-hidden="true"> <?=$footer4; ?></i></h3>
                                <iframe style="border-radius: 50px 20px;" src="map.php" width="280" height="180"></iframe>
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