<?php 
    session_start();
    if(!isset($_SESSION['ID'])){
        header('Location:index.php');
    }
    
    $dbcon = mysqli_connect("localhost","root","poppom22936","final") or die(mysqli_error());
    if (mysqli_connect_error()){
        echo"ไม่สามารถติดต่อฐานข้อมูลได้";
    }
    mysqli_set_charset($dbcon,'utf8');
    $session_login_id = $_SESSION['ID'];
    // echo "<script type=\"text/javascript\">alert('$$session_login_id') </script>";

    $qre_user = "SELECT * FROM user WHERE ID='$session_login_id'";
    $result_user = mysqli_query($dbcon,$qre_user);
    if($result_user){
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $s_login_username = $row_user['Username'];
    }
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/่jpg" href="/uploads/PACIFIC STAR GROUP_logo.jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Dashboard</title>

    <!-- Custom styles for this template -->
    <link href="Admincss/dashboard.css" rel="stylesheet">
    <style>
    img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
    }

    img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }
    </style>
    
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php">PACIFICSTARGROUP</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#" style="padding:1px;"><?php echo $row_user['Username'];?></a>
          <a class="nav-link" href="../logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="../Admin/dashborad.php">
                  <span data-feather="home"></span>
                  Index <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Admin/AboutAdmin.php">
                  <span data-feather="file"></span>
                  About Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Admin/ContactAdmin.php">
                  <span data-feather="users"></span>
                  Contact
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="../Admin/Herder_footer.php">
                <span data-feather="bar-chart-2"></span>
                HERDER/FOOTER
              </a>
            </li>
              <li class="nav-item">
                <a class="nav-link active" href="../Admin/UplodeImg.php">
                  <span data-feather="layers"></span>
                  Uplode Images
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="../Admin/AdminNews.php">
                <span data-feather="layers"></span>
                AdminNews
              </a>
            </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Service</span>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="../Admin/Servics1Admin.php">
                  <span data-feather="file-text"></span>
                  Service 1
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Admin/incotermAdmin.php">
                  <span data-feather="file-text"></span>
                  incoterm
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="../Admin/Service2Admin.php">
                  <span data-feather="file-text"></span>
                  Service 2
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Admin/Service3Admin.php">
                  <span data-feather="file-text"></span>
                  Service 3
                </a>
              </li> -->
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">YOU CAN Uplode IMAGE</h1>
            </div>
            <p>To import a valid Image, just select the file you would like to upload using the 'Browse' button below.</p>
            <div>
            <form action="../sql/uploadimg.php" method="POST" enctype="multipart/form-data">
            <div id='imageloadbutton'>
              <div>
                <input type="file" name="photos[]" id="photoimg" multiple="multiple" required>
              </div>
              <div class="form-group" style="padding-top:15px;">
                  <button type="submit" class="btn btn-primary mb-2">Upload Image</button>
              </div>
            </form>
            <h4>All Image</h4>
              <div class="row">
                  <?php 
                    $sql_img = "SELECT * FROM `image`";
                    $qre_img = mysqli_query($dbcon,$sql_img);
                    while ($row = mysqli_fetch_array($qre_img)) {
                  ?>
              <div class="col-sm-3">
                <a href="<?php echo $row['img_name'];?>" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo $row['img_name'];?>" alt="<?php echo $row['img_name'];?>" style="width:250px; height: 250px;" >
                </a>
                <div align="center">
                <p>image name: <?php echo substr($row['img_name'],11);?></p>
                <a href="../sql/deleteimg.php?name=<?php echo $row['img_name'];?>" onclick="return confirm('Are you sure?')" class="btn btn-danger" role="button" aria-pressed="true">DELETE THIS IMAGE</a>
                </div>
                <br>
              </div>
              <?php } ?>
              </div>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script> -->

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->

  </body>
</html>
