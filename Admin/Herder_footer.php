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

  <title>Dashboard </title>

  <!-- Custom styles for this template -->
  <link href="Admincss/dashboard.css" rel="stylesheet">
  <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php">PACIFICSTARGROUP</a>
    <input class="form-control form-control-dark w-100" type="text"  id="myInput" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#" style="padding:1px;">
          <?php echo $row_user['Username'];?></a>
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
              <a class="nav-link active" href="../Admin/Herder_footer.php">
                <span data-feather="bar-chart-2"></span>
                HERDER/FOOTER
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Admin/UplodeImg.php">
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
          <h1 class="h2">YOU CAN EDIT PAGE HERDER/FOOTER THIS HERE</h1>
        </div>

        <h4>TEXT HERDER ON WEB</h4><br>
        <div>

          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne" style="background-color: #99c2ff;">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Edit Text ENG
                  </button>
                </h5>
              </div>

              <?php 
                  $sql = "SELECT content FROM `en`";
                  $q = mysqli_query($dbcon,$sql);
                  $post = array();
                  $val = array();
                  while($row = mysqli_fetch_array($q))
                  {
                      $post[] = $row;
                  }
              
                  foreach ($post as $row) 
                   { 
                       foreach ($row as $element)
                       {
                           $val[] = $element;
                       }
                   }
              ?>

              <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <form action="../sql/editherderENG.php" method="post">
                        <h2>EditPage for Eng</h2>
                        <div class="form-group">
                          <label for="name_com">Name Company</label>
                          <input type="text" class="form-control" id="name_com" name="name_com" value="<?php echo $val[273];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1">munu1</label>
                          <input type="text" class="form-control" id="manu1" name="manu1" value="<?php echo $val[275];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_1">munu1_1</label>
                          <input type="text" class="form-control" id="manu1_1" name="manu1_1" value="<?php echo $val[277];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_2">munu1_2</label>
                          <input type="text" class="form-control" id="manu1_2" name="manu1_2" value="<?php echo $val[279];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_3">munu1_3</label>
                          <input type="text" class="form-control" id="manu1_3" name="manu1_3" value="<?php echo $val[281];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_4">munu1_4</label>
                          <input type="text" class="form-control" id="manu1_4" name="manu1_4" value="<?php echo $val[283];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_5">munu1_5</label>
                          <input type="text" class="form-control" id="manu1_5" name="manu1_5" value="<?php echo $val[285];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_6">munu1_6</label>
                          <input type="text" class="form-control" id="manu1_6" name="manu1_6" value="<?php echo $val[287];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu2">munu2</label>
                          <input type="text" class="form-control" id="manu2" name="manu2" value="<?php echo $val[289];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu3">munu3</label>
                          <input type="text" class="form-control" id="manu3" name="manu3" value="<?php echo $val[291];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu4">munu4</label>
                          <input type="text" class="form-control" id="manu4" name="manu4" value="<?php echo $val[293];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu5">munu5</label>
                          <input type="text" class="form-control" id="manu5" name="manu5" value="<?php echo $val[295];?>">
                        </div>
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingTwo" style="background-color: #ff9999;">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    Edit Text VN
                  </button>
                </h5>
              </div>

              <?php 
                  $sql2 = "SELECT content FROM `vn`";
                  $q2 = mysqli_query($dbcon,$sql2);
                  $post2 = array();
                  $val2 = array();
                  while($row2 = mysqli_fetch_array($q2))
                  {
                      $post2[] = $row2;
                  }
              
                  foreach ($post2 as $row2) 
                   { 
                       foreach ($row2 as $element2)
                       {
                           $val2[] = $element2;
                       }
                   }
              ?>


              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                    <form action="../sql/editherderVN.php" method="post">
                        <h2>EditPage for VN</h2>
                        <div class="form-group">
                          <label for="name_com">Name Company</label>
                          <input type="text" class="form-control" id="name_com" name="name_com" value="<?php echo $val2[273];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1">munu1</label>
                          <input type="text" class="form-control" id="manu1" name="manu1" value="<?php echo $val2[275];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_1">munu1_1</label>
                          <input type="text" class="form-control" id="manu1_1" name="manu1_1" value="<?php echo $val2[277];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_2">munu1_2</label>
                          <input type="text" class="form-control" id="manu1_2" name="manu1_2" value="<?php echo $val2[279];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_3">munu1_3</label>
                          <input type="text" class="form-control" id="manu1_3" name="manu1_3" value="<?php echo $val2[281];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_4">munu1_4</label>
                          <input type="text" class="form-control" id="manu1_4" name="manu1_4" value="<?php echo $val2[283];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_5">munu1_5</label>
                          <input type="text" class="form-control" id="manu1_5" name="manu1_5" value="<?php echo $val2[285];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu1_6">munu1_6</label>
                          <input type="text" class="form-control" id="manu1_6" name="manu1_6" value="<?php echo $val2[287];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu2">munu2</label>
                          <input type="text" class="form-control" id="manu2" name="manu2" value="<?php echo $val2[289];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu3">munu3</label>
                          <input type="text" class="form-control" id="manu3" name="manu3" value="<?php echo $val2[291];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu4">munu4</label>
                          <input type="text" class="form-control" id="manu4" name="manu4" value="<?php echo $val2[293];?>">
                        </div>
                        <div class="form-group">
                          <label for="manu5">munu5</label>
                          <input type="text" class="form-control" id="manu5" name="manu5" value="<?php echo $val2[295];?>">
                        </div>
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br><br><br>
          <!-- footer -->

          <h4>TEXT FOOTER ON WEB</h4><br>
        <div>

          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne" style="background-color: #99c2ff;">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTree"
                    aria-expanded="true" aria-controls="collapseTree">
                    Edit Text ENG
                  </button>
                </h5>
              </div>

              <div id="collapseTree" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <form action="../sql/editfooterENG.php" method="post">
                        <h2>EditPage for Eng</h2>
                        <div class="form-group">
                          <label for="footer1">footer 1</label>
                          <input type="text" class="form-control" id="footer1" name="footer1" value="<?php echo $val[297];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer1">Edit Detail footer 1</label>
                          <textarea class="form-control" name="dt_footer1" id="dt_footer1" cols="15" rows="5" ><?php echo $val[299];?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="footer2">footer2</label>
                          <input type="text" class="form-control" id="footer2" name="footer2" value="<?php echo $val[301];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer2">Edit Detail footer 2</label>
                          <textarea class="form-control" name="dt_footer2" id="dt_footer2" cols="15" rows="5" ><?php echo $val[303];?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="footer3">footer3</label>
                          <input type="text" class="form-control" id="footer3" name="footer3" value="<?php echo $val[305];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer3_1">detail_footer3_1</label>
                          <input type="text" class="form-control" id="dt_footer3_1" name="dt_footer3_1" value="<?php echo $val[307];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer3_2">detail_footer3_2</label>
                          <input type="text" class="form-control" id="dt_footer3_2" name="dt_footer3_2" value="<?php echo $val[309];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer3_3">detail_footer3_3</label>
                          <input type="text" class="form-control" id="dt_footer3_3" name="dt_footer3_3" value="<?php echo $val[311];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer3_4">detail_footer3_4</label>
                          <input type="text" class="form-control" id="dt_footer3_4" name="dt_footer3_4" value="<?php echo $val[313];?>">
                        </div>
                        <div class="form-group">
                          <label for="footer4">footer4</label>
                          <input type="text" class="form-control" id="footer4" name="footer4" value="<?php echo $val[315];?>">
                        </div>
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingTwo" style="background-color: #ff9999;">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefore"
                    aria-expanded="false" aria-controls="collapsefore">
                    Edit Text VN
                  </button>
                </h5>
              </div>


              <div id="collapsefore" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                    <form action="../sql/editfooterVN.php" method="post">
                        <h2>EditPage for VN</h2>
                        <div class="form-group">
                          <label for="footer1">footer 1</label>
                          <input type="text" class="form-control" id="footer1" name="footer1" value="<?php echo $val2[297];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer1">Edit Detail footer 1</label>
                          <textarea class="form-control" name="dt_footer1" id="dt_footer1" cols="15" rows="5" ><?php echo $val2[299];?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="footer2">footer2</label>
                          <input type="text" class="form-control" id="footer2" name="footer2" value="<?php echo $val2[301];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer2">Edit Detail footer 2</label>
                          <textarea class="form-control" name="dt_footer2" id="dt_footer2" cols="15" rows="5" ><?php echo $val2[303];?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="footer3">footer3</label>
                          <input type="text" class="form-control" id="footer3" name="footer3" value="<?php echo $val2[305];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer3_1">detail_footer3_1</label>
                          <input type="text" class="form-control" id="dt_footer3_1" name="dt_footer3_1" value="<?php echo $val2[307];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer3_2">detail_footer3_2</label>
                          <input type="text" class="form-control" id="dt_footer3_2" name="dt_footer3_2" value="<?php echo $val2[309];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer3_3">detail_footer3_3</label>
                          <input type="text" class="form-control" id="dt_footer3_3" name="dt_footer3_3" value="<?php echo $val2[311];?>">
                        </div>
                        <div class="form-group">
                          <label for="dt_footer3_4">detail_footer3_4</label>
                          <input type="text" class="form-control" id="dt_footer3_4" name="dt_footer3_4" value="<?php echo $val2[313];?>">
                        </div>
                        <div class="form-group">
                          <label for="footer4">footer4</label>
                          <input type="text" class="form-control" id="footer4" name="footer4" value="<?php echo $val2[315];?>">
                        </div>
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
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