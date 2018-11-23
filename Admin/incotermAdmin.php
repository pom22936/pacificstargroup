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
                <a class="nav-link active" href="../Admin/incotermAdmin.php">
                  <span data-feather="file-text"></span>
                  incoterm
                </a>
              </li>
              <!-- <li class="nav-item">
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
              <h1 class="h2">YOU CAN E-Dit Text incoterm Page</h1>
            </div>
            
            <h4>TEXT ON WEB</h4><br>
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
                      <form action="../sql/editincotermENG.php" method="post">
                        <h2>EditPage for Eng</h2>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary pull-right">Save changes</button>
                        </div><br><br>
                        <div class="form-row">
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 1 :</h2>
                            <div class="form-group">
                              <label for="title_incoterm">title</label>
                              <input type="text" class="form-control" id="title_incoterm" name="title_incoterm" value="<?php echo $val[317];?>">
                            </div>
                            <div class="form-group">
                              <label for="incoterm_detail">Edit Detail incoterm</label>
                              <textarea class="form-control" name="incoterm_detail" id="incoterm_detail" cols="15" rows="5" ><?php echo $val[319];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 2 :</h2>
                            <div class="form-group">
                              <label for="ct1">E-dit Content 1</label>
                              <input type="text" class="form-control" id="ct1" name="ct1" value="<?php echo $val[321];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct1">E-dit Detail Content 1</label>
                              <textarea class="form-control" name="dt_ct1" id="dt_ct1" cols="15" rows="5"><?php echo $val[323];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6">
                          <h2>Content 3 :</h2> 
                            <div class="form-group">
                              <label for="ct2">E-dit Content 2</label>
                              <input type="text" class="form-control" id="ct2" name="ct2" value="<?php echo $val[325];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct2">E-dit Detail Content 2</label>
                              <textarea class="form-control" name="dt_ct2" id="dt_ct2" cols="15" rows="5"><?php echo $val[327];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 4 :</h2>
                            <div class="form-group">
                              <label for="ct3">E-dit Content 3</label>
                              <input type="text" class="form-control" id="ct3" name="ct3" value="<?php echo $val[329];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct3">E-dit Detail Content 3</label>
                              <textarea class="form-control" name="dt_ct3" id="dt_ct3" cols="15" rows="5"><?php echo $val[331];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 5 :</h2>
                            <div class="form-group">
                              <label for="ct4">E-dit Content 4</label>
                              <input type="text" class="form-control" id="ct4" name="ct4" value="<?php echo $val[333];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct4">E-dit Detail Content 4</label>
                              <textarea class="form-control" name="dt_ct4" id="dt_ct4" cols="15" rows="5"><?php echo $val[335];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 6 :</h2>
                            <div class="form-group">
                              <label for="ct5">E-dit Content 5</label>
                              <input type="text" class="form-control" id="ct5" name="ct5" value="<?php echo $val[337];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct5">E-dit Detail Content 5</label>
                              <textarea class="form-control" name="dt_ct5" id="dt_ct5" cols="15" rows="5"><?php echo $val[339];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 7 :</h2>
                            <div class="form-group">
                              <label for="ct6">E-dit Content 6</label>
                              <input type="text" class="form-control" id="ct6" name="ct6" value="<?php echo $val[341];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct6">E-dit Detail Content 6</label>
                              <textarea class="form-control" name="dt_ct6" id="dt_ct6" cols="15" rows="5"><?php echo $val[343];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 8 :</h2>
                            <div class="form-group">
                              <label for="ct7">E-dit Content 7</label>
                              <input type="text" class="form-control" id="ct7" name="ct7" value="<?php echo $val[345];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct7">E-dit Detail Content 7</label>
                              <textarea class="form-control" name="dt_ct7" id="dt_ct7" cols="15" rows="5"><?php echo $val[347];?></textarea>
                            </div>
                          </div>

                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 9 :</h2>
                            <div class="form-group">
                              <label for="ct8">E-dit Content 8</label>
                              <input type="text" class="form-control" id="ct8" name="ct8" value="<?php echo $val[349];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct8">E-dit Detail Content 8</label>
                              <textarea class="form-control" name="dt_ct8" id="dt_ct8" cols="15" rows="5"><?php echo $val[351];?></textarea>
                            </div>
                          </div>

                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 10 :</h2>
                            <div class="form-group">
                              <label for="ct9">E-dit Content 9</label>
                              <input type="text" class="form-control" id="ct9" name="ct9" value="<?php echo $val[353];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct9">E-dit Detail Content 9</label>
                              <textarea class="form-control" name="dt_ct9" id="dt_ct9" cols="15" rows="5"><?php echo $val[355];?></textarea>
                            </div>
                          </div>

                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 11 :</h2>
                            <div class="form-group">
                              <label for="ct10">E-dit Content 10</label>
                              <input type="text" class="form-control" id="ct10" name="ct10" value="<?php echo $val[357];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct10">E-dit Detail Content 10</label>
                              <textarea class="form-control" name="dt_ct10" id="dt_ct10" cols="15" rows="5"><?php echo $val[359];?></textarea>
                            </div>
                          </div>

                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 12 :</h2>
                            <div class="form-group">
                              <label for="ct11">E-dit Content 11</label>
                              <input type="text" class="form-control" id="ct11" name="ct11" value="<?php echo $val[361];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct11">E-dit Detail Content 11</label>
                              <textarea class="form-control" name="dt_ct11" id="dt_ct11" cols="15" rows="5"><?php echo $val[363];?></textarea>
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Save changes</button>
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
                    <form action="../sql/editincotermVN.php" method="post">
                        <h2>EditPage for VN</h2>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary pull-right">Save changes</button>
                        </div><br><br>
                        <div class="form-row">
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 1 :</h2>
                            <div class="form-group">
                              <label for="title_incoterm">title</label>
                              <input type="text" class="form-control" id="title_incoterm" name="title_incoterm" value="<?php echo $val2[317];?>">
                            </div>
                            <div class="form-group">
                              <label for="incoterm_detail">Edit Detail incoterm</label>
                              <textarea class="form-control" name="incoterm_detail" id="incoterm_detail" cols="15" rows="5" ><?php echo $val2[319];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 2 :</h2>
                            <div class="form-group">
                              <label for="ct1">E-dit Content 1</label>
                              <input type="text" class="form-control" id="ct1" name="ct1" value="<?php echo $val2[321];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct1">E-dit Detail Content 1</label>
                              <textarea class="form-control" name="dt_ct1" id="dt_ct1" cols="15" rows="5"><?php echo $val2[323];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 3 :</h2>
                            <div class="form-group">
                              <label for="ct2">E-dit Content 2</label>
                              <input type="text" class="form-control" id="ct2" name="ct2" value="<?php echo $val2[325];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct2">E-dit Detail Content 2</label>
                              <textarea class="form-control" name="dt_ct2" id="dt_ct2" cols="15" rows="5"><?php echo $val2[327];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 4 :</h2>
                            <div class="form-group">
                              <label for="ct3">E-dit Content 3</label>
                              <input type="text" class="form-control" id="ct3" name="ct3" value="<?php echo $val2[329];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct3">E-dit Detail Content 3</label>
                              <textarea class="form-control" name="dt_ct3" id="dt_ct3" cols="15" rows="5"><?php echo $val2[331];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6">
                          <h2>Content 5 :</h2> 
                            <div class="form-group">
                              <label for="ct4">E-dit Content 4</label>
                              <input type="text" class="form-control" id="ct4" name="ct4" value="<?php echo $val2[333];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct4">E-dit Detail Content 4</label>
                              <textarea class="form-control" name="dt_ct4" id="dt_ct4" cols="15" rows="5"><?php echo $val2[335];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6">
                          <h2>Content 6 :</h2> 
                            <div class="form-group">
                              <label for="ct5">E-dit Content 5</label>
                              <input type="text" class="form-control" id="ct5" name="ct5" value="<?php echo $val2[337];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct5">E-dit Detail Content 5</label>
                              <textarea class="form-control" name="dt_ct5" id="dt_ct5" cols="15" rows="5"><?php echo $val2[339];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 7 :</h2>
                            <div class="form-group">
                              <label for="ct6">E-dit Content 6</label>
                              <input type="text" class="form-control" id="ct6" name="ct6" value="<?php echo $val2[341];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct6">E-dit Detail Content 6</label>
                              <textarea class="form-control" name="dt_ct6" id="dt_ct6" cols="15" rows="5"><?php echo $val2[343];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6">
                          <h2>Content 8 :</h2> 
                            <div class="form-group">
                              <label for="ct7">E-dit Content 7</label>
                              <input type="text" class="form-control" id="ct7" name="ct7" value="<?php echo $val2[345];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct7">E-dit Detail Content 7</label>
                              <textarea class="form-control" name="dt_ct7" id="dt_ct7" cols="15" rows="5"><?php echo $val2[347];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6">
                          <h2>Content 9 :</h2> 
                            <div class="form-group">
                              <label for="ct8">E-dit Content 8</label>
                              <input type="text" class="form-control" id="ct8" name="ct8" value="<?php echo $val2[349];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct8">E-dit Detail Content 8</label>
                              <textarea class="form-control" name="dt_ct8" id="dt_ct8" cols="15" rows="5"><?php echo $val2[351];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 10 :</h2>
                            <div class="form-group">
                              <label for="ct9">E-dit Content 9</label>
                              <input type="text" class="form-control" id="ct9" name="ct9" value="<?php echo $val2[353];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct9">E-dit Detail Content 9</label>
                              <textarea class="form-control" name="dt_ct9" id="dt_ct9" cols="15" rows="5"><?php echo $val2[355];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 11 :</h2>
                            <div class="form-group">
                              <label for="ct10">E-dit Content 10</label>
                              <input type="text" class="form-control" id="ct10" name="ct10" value="<?php echo $val2[357];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct10">E-dit Detail Content 10</label>
                              <textarea class="form-control" name="dt_ct10" id="dt_ct10" cols="15" rows="5"><?php echo $val2[359];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 12 :</h2>
                            <div class="form-group">
                              <label for="ct11">E-dit Content 11</label>
                              <input type="text" class="form-control" id="ct11" name="ct11" value="<?php echo $val2[361];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ct11">E-dit Detail Content 11</label>
                              <textarea class="form-control" name="dt_ct11" id="dt_ct11" cols="15" rows="5"><?php echo $val2[363];?></textarea>
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- จบแก้ไขภาษา -->

          <br><br>

           <h4>Choose Image for page</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Choose Image </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <form action="../incoterm.php" method="post">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">All Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                  <div style="border-style: solid; border-color: #000000; padding: 25px;">
                    <center><img id="showimg" src="" alt="" style="width: 150px; height:150px;"><br></center>
                    <script>
					$(document).ready(function(){	
                        $("#selectshowimg").change(function(){
                            var filename = $("option:selected").attr('value');
                            console.log(filename);
                            $("#showimg").attr("src",function(){
                                return filename;
                            });
                        });
					});
                    </script>
                        <label for="seleter1">Select For Display Image</label>
                    <div class="form-group">
                    <select class="custom-select" id="selectshowimg">
                        <option value="">Open this select menu</option>
                        <?php 
                            $sql_img = "SELECT * FROM `image`";
                            $qre_img = mysqli_query($dbcon,$sql_img);
                            while ($row = mysqli_fetch_array($qre_img)) {
                        ?>
                        <option value="<?php echo $row['img_name'];?>"><?php echo substr($row['img_name'],11); ?></option>
                        <?php }?>
                        </select>
                    </div>
                   </div><br>

                  <label for="seleter1">Image 1 : Herder incoterm</label>
                  <div class="form-group" id="seleter1" name="seleter1">
                  <select class="custom-select" id="img51" name="img51">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option i value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter2">Image 2 : image Content 2</label>
                  <div class="form-group" id="seleter2" name="seleter2">
                  <select class="custom-select" id="img52" name="img52">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option  value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter3">Image 3 : image Content 3</label>
                  <div class="form-group" id="seleter3" name="seleter3">
                  <select class="custom-select" id="img53" name="img53">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option  value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter4">Image 4 : image Content 4</label>
                  <div class="form-group" id="seleter4" name="seleter4">
                  <select class="custom-select" id="img54" name="img54">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option  value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter5">Image 5 : image Content 5</label>
                  <div class="form-group" id="seleter5" name="seleter55">
                  <select class="custom-select" id="img55" name="img55">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option  value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter6">Image 6 : image Content 6</label>
                  <div class="form-group" id="seleter6" name="seleter6">
                  <select class="custom-select" id="img56" name="img56">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option  value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter7">Image 7 : image Content 7</label>
                  <div class="form-group" id="seleter7" name="seleter7">
                  <select class="custom-select" id="img57" name="img57">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option  value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">Image 8 : image Content 8</label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img58" name="img58">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option  value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter9">Image 9 : image Content 9</label>
                  <div class="form-group" id="seleter9" name="seleter9">
                  <select class="custom-select" id="img59" name="img59">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option  value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter10">Image 10 : image Content 10</label>
                  <div class="form-group" id="seleter10" name="seleter10">
                  <select class="custom-select" id="img60" name="img60">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option  value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter11">Image 11 : image Content 11</label>
                  <div class="form-group" id="seleter11" name="seleter11">
                  <select class="custom-select" id="img61" name="img61">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option  value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter12">Image 12 : image Content 12</label>
                  <div class="form-group" id="seleter12" name="seleter12">
                  <select class="custom-select" id="img62" name="img62">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option  value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>

                  </form>
                </div>
              </div>
            </div>
            <!-- จบเลือกภาพ -->
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
