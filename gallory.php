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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gallory</title>
    <link rel="icon" type="image/่jpg" href="/uploads/PACIFIC STAR GROUP_logo.jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="css/stylegallery.css">
    <link rel="stylesheet" href="css/manu_parallax.css">
    <script src="js/script.js"></script>
    
</head>
<body>
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
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
            <div class="fb-customerchat"  page_id="573046396208213"></div>
        


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
<br><br><br>
<div style="background-color:#222222; color:#ffffff; padding-top:10px; padding-bottom:2px;">
    <div class="container">
        <h1> Gallery</h1>
    </div>
</div>


<div class="tz-gallery">

<div class="row">
    <?php 
        $dbcon = mysqli_connect("localhost","root","poppom22936","final") or die(mysqli_error());
        if (mysqli_connect_error()){
            echo"can not connext Database";
        }
        mysqli_set_charset($dbcon,'utf8');

        $sql_img = "SELECT img_name FROM `image` ORDER BY imageID DESC limit 20";
        $query_img = mysqli_query($dbcon,$sql_img);
        while ($row = mysqli_fetch_array($query_img)) {
        
    ?>
        <div class="col-sm-6 col-md-4">
        <a class="lightbox" href="<?php echo substr($row['img_name'],3);?>">
            <img src="<?php echo substr($row['img_name'],3);?>" alt="Park">
        </a>
    </div>
    <?php } ?>

    <!-- <div class="col-sm-12 col-md-4">
        <a class="lightbox" href="img/business-cargo-cargo-container-1117210.jpg">
            <img src="img/business-cargo-cargo-container-1117210.jpg" alt="Bridge">
        </a>
    </div>
    <div class="col-sm-6 col-md-4">
        <a class="lightbox" href="img/business-1845350_1280.jpg">
            <img src="img/business-1845350_1280.jpg" alt="Park">
        </a>
    </div>
    <div class="col-sm-6 col-md-4">
        <a class="lightbox" href="img/anchor-boat-boats-275543.jpg">
            <img src="img/anchor-boat-boats-275543.jpg" alt="Tunnel">
        </a>
    </div>
    <div class="col-sm-12 col-md-4">
        <a class="lightbox" href="img/business-cargo-cargo-container-1117210.jpg">
            <img src="img/business-cargo-cargo-container-1117210.jpg" alt="Bridge">
        </a>
    </div>
    <div class="col-sm-6 col-md-4">
        <a class="lightbox" href="img/business-1845350_1280.jpg">
            <img src="img/business-1845350_1280.jpg" alt="Park">
        </a>
    </div>
    <div class="col-sm-6 col-md-4">
        <a class="lightbox" href="img/logistics-3125131_1280.jpg">
            <img src="img/logistics-3125131_1280.jpg" alt="Tunnel">
        </a>
    </div>
    <div class="col-sm-12 col-md-4">
        <a class="lightbox" href="img/business-cargo-cargo-container-1117210.jpg">
            <img src="img/business-cargo-cargo-container-1117210.jpg" alt="Bridge">
        </a>
    </div>
    <div class="col-sm-6 col-md-4">
        <a class="lightbox" href="img/business-1845350_1280.jpg">
            <img src="img/business-1845350_1280.jpg" alt="Park">
        </a>
    </div>
    <div class="col-sm-6 col-md-4">
        <a class="lightbox" href="img/logistics-3125131_1280.jpg">
            <img src="img/logistics-3125131_1280.jpg" alt="Tunnel">
        </a>
    </div> -->
    <!-- <div class="col-sm-12 col-md-8">
        <a class="lightbox" href="img/anchor-boat-boats-275543.jpg">
            <img src="img/anchor-boat-boats-275543.jpg" alt="Traffic">
        </a>
    </div>
    <div class="col-sm-6 col-md-4">
        <a class="lightbox" href="img/forklift-835340_1280.jpg">
            <img src="img/forklift-835340_1280.jpg" alt="Coast">
        </a>
    </div> 
    <div class="col-sm-6 col-md-4">
        <a class="lightbox" href="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg">
            <img src="https://raw.githubusercontent.com/LeshikJanz/libraries/master/Related%20images/Bootstrap%20example/coast.jpg" alt="Rails">
        </a>
    </div> -->

</div>

</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>



<footer>
                <div style="background-image: linear-gradient(#ffffff, #66CCFF); padding:1.5%; color:#000000;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                                <h3><i class="fa fa-user-circle " aria-hidden="true"> <?=$footer1; ?></i></h3>
                                <p><?=$detail_footer1; ?></p>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                                <h3><i class="fa fa-envelope-open-o" aria-hidden="true"> <?=$footer2; ?></i></h3>
                                <p><?=$detail_footer2; ?></p>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                                <h3><i class="fa fa-comments-o" aria-hidden="true"> <?=$footer3; ?></i></h3>
                                <ul>
                                    <li><?=$detail_footer3_1; ?></li>
                                    <li><?=$detail_footer3_2; ?></li>
                                    <li><?=$detail_footer3_3; ?></li>
                                    <li><?=$detail_footer3_4; ?></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                                <h3><i class="fa fa-globe" aria-hidden="true"> <?=$footer4; ?></i></h3>
                                <iframe style="border-radius: 50px 20px;" src="map.php" width="280" height="180"></iframe>
                            </div>
                        </div>
                    </div>
            </footer>
<div style="background-color:#000000; color:#ffffff;">
        <p style="margin:0%;" align="left">Copyright © PALM PHONGSAKON Website 2018</p>
    </div>
    </body>
</html>
