<?php 
    session_start();
    if(!isset($_SESSION['ID'])){
        header('Location:index.php');
    }
    
    $dbcon = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b65d8c72f0f221","8a9fceb5245ea91","heroku_6739ef157d1165b") or die(mysqli_error());
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
                <a class="nav-link active" href="../Admin/Servics1Admin.php">
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
              <h1 class="h2">YOU CAN E-Dit Text Service Page</h1>
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
                      <form action="../sql/editservicepageENG.php" method="post">
                        <h2>EditPage for Eng</h2>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary pull-right">Save changes</button>
                        </div>
                        <h2>Content 1 :</h2>
                        <div style="border-style: solid; border-color: #000000; padding: 25px;"> 
                            <div class="form-group">
                                <label for="title_service">title</label>
                                <input type="text" class="form-control" id="title_service" name="title_service" value="<?php echo $val[117]; ?>">
                            </div>
                            <div class="form-group">
                                <label for="topic_ct_service1">topic service1</label>
                                <input type="text" class="form-control" id="topic_ct_service1" name="topic_ct_service1" value="<?php echo $val[119]; ?>">
                            </div>
                            <div class="form-group">
                                <label for="detail_ct_service1">Edit Discription for Topic service1</label>
                                <textarea class="form-control" name="detail_ct_service1" id="detail_ct_service1" cols="15" rows="5" ><?php echo $val[121];?></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            
                            <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                            <h2>Content 2 :</h2>
                                <div class="form-group">
                                    <label for="topic_ct_service2">topic service1 content2</label>
                                    <input type="text" class="form-control" id="topic_ct_service2" name="topic_ct_service2" value="<?php echo $val[123];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_A">topic A</label>
                                    <input type="text" class="form-control" id="topic_A" name="topic_A" value="<?php echo $val[125];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_A">Edit Discription A</label>
                                    <textarea class="form-control" name="detail_A" id="detail_A" cols="15" rows="5" ><?php echo $val[127];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="topic_B">topic B</label>
                                    <input type="text" class="form-control" id="topic_B" name="topic_B" value="<?php echo $val[129];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_B">Edit Discription B</label>
                                    <textarea class="form-control" name="detail_B" id="detail_B" cols="15" rows="5" ><?php echo $val[131];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="topic_C">topic C</label>
                                    <input type="text" class="form-control" id="topic_C" name="topic_C" value="<?php echo $val[133];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_C">Edit Discription C</label>
                                    <textarea class="form-control" name="detail_C" id="detail_C" cols="15" rows="5" ><?php echo $val[135];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_C1">sup topic C1</label>
                                    <input type="text" class="form-control" id="sup_topic_C1" name="sup_topic_C1" value="<?php echo $val[137];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_C2">sup topic C2</label>
                                    <input type="text" class="form-control" id="sup_topic_C2" name="sup_topic_C2" value="<?php echo $val[139];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_C3">sup topic C3</label>
                                    <input type="text" class="form-control" id="sup_topic_C3" name="sup_topic_C3" value="<?php echo $val[141];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_D">topic D</label>
                                    <input type="text" class="form-control" id="topic_D" name="topic_D" value="<?php echo $val[143];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_D">Edit Discription D</label>
                                    <textarea class="form-control" name="detail_D" id="detail_D" cols="15" rows="5" ><?php echo $val[145];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_D1">sup topic D1</label>
                                    <input type="text" class="form-control" id="sup_topic_D1" name="sup_topic_D1" value="<?php echo $val[147];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_D2">sup topic D2</label>
                                    <input type="text" class="form-control" id="sup_topic_D2" name="sup_topic_D2" value="<?php echo $val[149];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_D3">sup topic D3</label>
                                    <input type="text" class="form-control" id="sup_topic_D3" name="sup_topic_D3" value="<?php echo $val[151];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_D4">sup topic D4</label>
                                    <input type="text" class="form-control" id="sup_topic_D4" name="sup_topic_D4" value="<?php echo $val[153];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_E">topic E</label>
                                    <input type="text" class="form-control" id="topic_E" name="topic_E" value="<?php echo $val[155];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_E">Edit Discription E</label>
                                    <textarea class="form-control" name="detail_E" id="detail_E" cols="15" rows="5" ><?php echo $val[157];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_E1">sup topic E1</label>
                                    <input type="text" class="form-control" id="sup_topic_E1" name="sup_topic_E1" value="<?php echo $val[159];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_E2">sup topic E2</label>
                                    <input type="text" class="form-control" id="sup_topic_E2" name="sup_topic_E2" value="<?php echo $val[161];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_E3">sup topic E3</label>
                                    <input type="text" class="form-control" id="sup_topic_E3" name="sup_topic_E3" value="<?php echo $val[163];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_E4">sup topic E4</label>
                                    <input type="text" class="form-control" id="sup_topic_E4" name="sup_topic_E4" value="<?php echo $val[165];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_F">topic F</label>
                                    <input type="text" class="form-control" id="topic_F" name="topic_F" value="<?php echo $val[167];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_F">Edit Discription F</label>
                                    <textarea class="form-control" name="detail_F" id="detail_F" cols="15" rows="5" ><?php echo $val[169];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F1">sup topic F1</label>
                                    <input type="text" class="form-control" id="sup_topic_F1" name="sup_topic_F1" value="<?php echo $val[171];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F2">sup topic F2</label>
                                    <input type="text" class="form-control" id="sup_topic_F2" name="sup_topic_F2" value="<?php echo $val[173];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F3">sup topic F3</label>
                                    <input type="text" class="form-control" id="sup_topic_F3" name="sup_topic_F3" value="<?php echo $val[175];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F4">sup topic F4</label>
                                    <input type="text" class="form-control" id="sup_topic_F4" name="sup_topic_F4" value="<?php echo $val[177];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F5">sup topic F5</label>
                                    <input type="text" class="form-control" id="sup_topic_F5" name="sup_topic_F5" value="<?php echo $val[179];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F6">sup topic F6</label>
                                    <input type="text" class="form-control" id="sup_topic_F6" name="sup_topic_F6" value="<?php echo $val[181];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_G">topic G</label>
                                    <input type="text" class="form-control" id="topic_G" name="topic_G" value="<?php echo $val[183];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_G">Edit Discription G</label>
                                    <textarea class="form-control" name="detail_G" id="detail_G" cols="15" rows="5" ><?php echo $val[185];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="topic_H">topic H</label>
                                    <input type="text" class="form-control" id="topic_H" name="topic_H" value="<?php echo $val[187];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_H">Edit Discription H</label>
                                    <textarea class="form-control" name="detail_H" id="detail_H" cols="15" rows="5" ><?php echo $val[189];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="topic_I">topic I</label>
                                    <input type="text" class="form-control" id="topic_I" name="topic_I" value="<?php echo $val[191];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I1">sup topic I1</label>
                                    <input type="text" class="form-control" id="sup_topic_I1" name="sup_topic_I1" value="<?php echo $val[193];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I2">sup topic I2</label>
                                    <input type="text" class="form-control" id="sup_topic_I2" name="sup_topic_I2" value="<?php echo $val[195];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I3">sup topic I3</label>
                                    <input type="text" class="form-control" id="sup_topic_I3" name="sup_topic_I3" value="<?php echo $val[197];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I4">sup topic I4</label>
                                    <input type="text" class="form-control" id="sup_topic_I4" name="sup_topic_I4" value="<?php echo $val[199];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I5">sup topic I5</label>
                                    <input type="text" class="form-control" id="sup_topic_I5" name="sup_topic_I5" value="<?php echo $val[201];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I6">sup topic I6</label>
                                    <input type="text" class="form-control" id="sup_topic_I6" name="sup_topic_I6" value="<?php echo $val[203];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_K">topic K</label>
                                    <input type="text" class="form-control" id="topic_K" name="topic_K" value="<?php echo $val[205];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_K">Edit Discription K</label>
                                    <textarea class="form-control" name="detail_K" id="detail_K" cols="15" rows="5" ><?php echo $val[207];?></textarea>
                                </div>
                            </div>

                            
                            <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                            <h2>Content 3 :</h2>
                                <div class="form-group">
                                    <label for="topic_ct_service3">topic service1 content3</label>
                                    <input type="text" class="form-control" id="topic_ct_service3" name="topic_ct_service3" value="<?php echo $val[209];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_price1">topic_price1</label>
                                    <input type="text" class="form-control" id="topic_price1" name="topic_price1" value="<?php echo $val[211];?>">
                                </div>
                                <div class="form-group">
                                    <label for="price1">price1</label>
                                    <input type="text" class="form-control" id="price1" name="price1" value="<?php echo $val[213];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price1_1">detail price1_1</label>
                                    <input type="text" class="form-control" id="detail_price1_1" name="detail_price1_1" value="<?php echo $val[215];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price1_2">detail price1_2</label>
                                    <input type="text" class="form-control" id="detail_price1_2" name="detail_price1_2" value="<?php echo $val[217];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price1_3">detail price1_3</label>
                                    <input type="text" class="form-control" id="detail_price1_3" name="detail_price1_3" value="<?php echo $val[219];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price1_4">detail price1_4</label>
                                    <input type="text" class="form-control" id="detail_price1_4" name="detail_price1_4" value="<?php echo $val[221];?>">
                                </div>

                                <div class="form-group">
                                    <label for="topic_price2">topic_price2</label>
                                    <input type="text" class="form-control" id="topic_price2" name="topic_price2" value="<?php echo $val[223];?>">
                                </div>
                                <div class="form-group">
                                    <label for="price2">price2</label>
                                    <input type="text" class="form-control" id="price2" name="price2" value="<?php echo $val[225];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price2_1">detail price2_1</label>
                                    <input type="text" class="form-control" id="detail_price2_1" name="detail_price2_1" value="<?php echo $val[227];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price2_2">detail price2_2</label>
                                    <input type="text" class="form-control" id="detail_price2_2" name="detail_price2_2" value="<?php echo $val[229];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price2_3">detail price2_3</label>
                                    <input type="text" class="form-control" id="detail_price2_3" name="detail_price2_3" value="<?php echo $val[231];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price2_4">detail price2_4</label>
                                    <input type="text" class="form-control" id="detail_price2_4" name="detail_price2_4" value="<?php echo $val[233];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_price3">topic_price3</label>
                                    <input type="text" class="form-control" id="topic_price3" name="topic_price3" value="<?php echo $val[235];?>">
                                </div>
                                <div class="form-group">
                                    <label for="price3">price3</label>
                                    <input type="text" class="form-control" id="price3" name="price3" value="<?php echo $val[237];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price3_1">detail price3_1</label>
                                    <input type="text" class="form-control" id="detail_price3_1" name="detail_price3_1" value="<?php echo $val[239];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price3_2">detail price3_2</label>
                                    <input type="text" class="form-control" id="detail_price3_2" name="detail_price3_2" value="<?php echo $val[241];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price3_3">detail price3_3</label>
                                    <input type="text" class="form-control" id="detail_price3_3" name="detail_price3_3" value="<?php echo $val[243];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price3_4">detail price3_4</label>
                                    <input type="text" class="form-control" id="detail_price3_4" name="detail_price3_4" value="<?php echo $val[245];?>">
                                </div>
                            </div><br>
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
                    <form action="../sql/editservicepageVN.php" method="post">
                        <h2>EditPage for vietnam</h2>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary pull-right">Save changes</button>
                        </div>
                        <h2>Content 1 :</h2>
                        <div style="border-style: solid; border-color: #000000; padding: 25px;"> 
                            <div class="form-group">
                                <label for="title_service">title</label>
                                <input type="text" class="form-control" id="title_service" name="title_service" value="<?php echo $val2[117]; ?>">
                            </div>
                            <div class="form-group">
                                <label for="topic_ct_service1">topic service1</label>
                                <input type="text" class="form-control" id="topic_ct_service1" name="topic_ct_service1" value="<?php echo $val2[119]; ?>">
                            </div>
                            <div class="form-group">
                                <label for="detail_ct_service1">Edit Discription for Topic service1</label>
                                <textarea class="form-control" name="detail_ct_service1" id="detail_ct_service1" cols="15" rows="5" ><?php echo $val2[121];?></textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                            <h2>Content 2 :</h2>
                                <div class="form-group">
                                    <label for="topic_ct_service2">topic service1 content2</label>
                                    <input type="text" class="form-control" id="topic_ct_service2" name="topic_ct_service2" value="<?php echo $val2[123];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_A">topic A</label>
                                    <input type="text" class="form-control" id="topic_A" name="topic_A" value="<?php echo $val2[125];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_A">Edit Discription A</label>
                                    <textarea class="form-control" name="detail_A" id="detail_A" cols="15" rows="5" ><?php echo $val2[127];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="topic_B">topic B</label>
                                    <input type="text" class="form-control" id="topic_B" name="topic_B" value="<?php echo $val2[129];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_B">Edit Discription B</label>
                                    <textarea class="form-control" name="detail_B" id="detail_B" cols="15" rows="5" ><?php echo $val2[131];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="topic_C">topic C</label>
                                    <input type="text" class="form-control" id="topic_C" name="topic_C" value="<?php echo $val2[133];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_C">Edit Discription C</label>
                                    <textarea class="form-control" name="detail_C" id="detail_C" cols="15" rows="5" ><?php echo $val2[135];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_C1">sup topic C1</label>
                                    <input type="text" class="form-control" id="sup_topic_C1" name="sup_topic_C1" value="<?php echo $val2[137];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_C2">sup topic C2</label>
                                    <input type="text" class="form-control" id="sup_topic_C2" name="sup_topic_C2" value="<?php echo $val2[139];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_C3">sup topic C3</label>
                                    <input type="text" class="form-control" id="sup_topic_C3" name="sup_topic_C3" value="<?php echo $val2[141];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_D">topic D</label>
                                    <input type="text" class="form-control" id="topic_D" name="topic_D" value="<?php echo $val2[143];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_D">Edit Discription D</label>
                                    <textarea class="form-control" name="detail_D" id="detail_D" cols="15" rows="5" ><?php echo $val2[145];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_D1">sup topic D1</label>
                                    <input type="text" class="form-control" id="sup_topic_D1" name="sup_topic_D1" value="<?php echo $val2[147];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_D2">sup topic D2</label>
                                    <input type="text" class="form-control" id="sup_topic_D2" name="sup_topic_D2" value="<?php echo $val2[149];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_D3">sup topic D3</label>
                                    <input type="text" class="form-control" id="sup_topic_D3" name="sup_topic_D3" value="<?php echo $val2[151];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_D4">sup topic D4</label>
                                    <input type="text" class="form-control" id="sup_topic_D4" name="sup_topic_D4" value="<?php echo $val2[153];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_E">topic E</label>
                                    <input type="text" class="form-control" id="topic_E" name="topic_E" value="<?php echo $val2[155];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_E">Edit Discription E</label>
                                    <textarea class="form-control" name="detail_E" id="detail_E" cols="15" rows="5" ><?php echo $val2[157];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_E1">sup topic E1</label>
                                    <input type="text" class="form-control" id="sup_topic_E1" name="sup_topic_E1" value="<?php echo $val2[159];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_E2">sup topic E2</label>
                                    <input type="text" class="form-control" id="sup_topic_E2" name="sup_topic_E2" value="<?php echo $val2[161];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_E3">sup topic E3</label>
                                    <input type="text" class="form-control" id="sup_topic_E3" name="sup_topic_E3" value="<?php echo $val2[163];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_E4">sup topic E4</label>
                                    <input type="text" class="form-control" id="sup_topic_E4" name="sup_topic_E4" value="<?php echo $val2[165];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_F">topic F</label>
                                    <input type="text" class="form-control" id="topic_F" name="topic_F" value="<?php echo $val2[167];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_F">Edit Discription F</label>
                                    <textarea class="form-control" name="detail_F" id="detail_F" cols="15" rows="5" ><?php echo $val2[169];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F1">sup topic F1</label>
                                    <input type="text" class="form-control" id="sup_topic_F1" name="sup_topic_F1" value="<?php echo $val2[171];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F2">sup topic F2</label>
                                    <input type="text" class="form-control" id="sup_topic_F2" name="sup_topic_F2" value="<?php echo $val2[173];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F3">sup topic F3</label>
                                    <input type="text" class="form-control" id="sup_topic_F3" name="sup_topic_F3" value="<?php echo $val2[175];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F4">sup topic F4</label>
                                    <input type="text" class="form-control" id="sup_topic_F4" name="sup_topic_F4" value="<?php echo $val2[177];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F5">sup topic F5</label>
                                    <input type="text" class="form-control" id="sup_topic_F5" name="sup_topic_F5" value="<?php echo $val2[179];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_F6">sup topic F6</label>
                                    <input type="text" class="form-control" id="sup_topic_F6" name="sup_topic_F6" value="<?php echo $val2[181];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_G">topic G</label>
                                    <input type="text" class="form-control" id="topic_G" name="topic_G" value="<?php echo $val2[183];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_G">Edit Discription G</label>
                                    <textarea class="form-control" name="detail_G" id="detail_G" cols="15" rows="5" ><?php echo $val2[185];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="topic_H">topic H</label>
                                    <input type="text" class="form-control" id="topic_H" name="topic_H" value="<?php echo $val2[187];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_H">Edit Discription H</label>
                                    <textarea class="form-control" name="detail_H" id="detail_H" cols="15" rows="5" ><?php echo $val2[189];?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="topic_I">topic I</label>
                                    <input type="text" class="form-control" id="topic_I" name="topic_I" value="<?php echo $val2[191];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I1">sup topic I1</label>
                                    <input type="text" class="form-control" id="sup_topic_I1" name="sup_topic_I1" value="<?php echo $val2[193];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I2">sup topic I2</label>
                                    <input type="text" class="form-control" id="sup_topic_I2" name="sup_topic_I2" value="<?php echo $val2[195];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I3">sup topic I3</label>
                                    <input type="text" class="form-control" id="sup_topic_I3" name="sup_topic_I3" value="<?php echo $val2[197];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I4">sup topic I4</label>
                                    <input type="text" class="form-control" id="sup_topic_I4" name="sup_topic_I4" value="<?php echo $val2[199];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I5">sup topic I5</label>
                                    <input type="text" class="form-control" id="sup_topic_I5" name="sup_topic_I5" value="<?php echo $val2[201];?>">
                                </div>
                                <div class="form-group">
                                    <label for="sup_topic_I6">sup topic I6</label>
                                    <input type="text" class="form-control" id="sup_topic_I6" name="sup_topic_I6" value="<?php echo $val2[203];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_K">topic K</label>
                                    <input type="text" class="form-control" id="topic_K" name="topic_K" value="<?php echo $val2[205];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_K">Edit Discription K</label>
                                    <textarea class="form-control" name="detail_K" id="detail_K" cols="15" rows="5" ><?php echo $val2[207];?></textarea>
                                </div>
                            </div>


                            <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                            <h2>Content 3 :</h2>
                                <div class="form-group">
                                    <label for="topic_ct_service3">topic service1 content3</label>
                                    <input type="text" class="form-control" id="topic_ct_service3" name="topic_ct_service3" value="<?php echo $val2[209];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_price1">topic_price1</label>
                                    <input type="text" class="form-control" id="topic_price1" name="topic_price1" value="<?php echo $val2[211];?>">
                                </div>
                                <div class="form-group">
                                    <label for="price1">price1</label>
                                    <input type="text" class="form-control" id="price1" name="price1" value="<?php echo $val2[213];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price1_1">detail price1_1</label>
                                    <input type="text" class="form-control" id="detail_price1_1" name="detail_price1_1" value="<?php echo $val2[215];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price1_2">detail price1_2</label>
                                    <input type="text" class="form-control" id="detail_price1_2" name="detail_price1_2" value="<?php echo $val2[217];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price1_3">detail price1_3</label>
                                    <input type="text" class="form-control" id="detail_price1_3" name="detail_price1_3" value="<?php echo $val2[219];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price1_4">detail price1_4</label>
                                    <input type="text" class="form-control" id="detail_price1_4" name="detail_price1_4" value="<?php echo $val2[221];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_price2">topic_price2</label>
                                    <input type="text" class="form-control" id="topic_price2" name="topic_price2" value="<?php echo $val2[223];?>">
                                </div>
                                <div class="form-group">
                                    <label for="price2">price2</label>
                                    <input type="text" class="form-control" id="price2" name="price2" value="<?php echo $val2[225];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price2_1">detail price2_1</label>
                                    <input type="text" class="form-control" id="detail_price2_1" name="detail_price2_1" value="<?php echo $val2[227];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price2_2">detail price2_2</label>
                                    <input type="text" class="form-control" id="detail_price2_2" name="detail_price2_2" value="<?php echo $val2[229];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price2_3">detail price2_3</label>
                                    <input type="text" class="form-control" id="detail_price2_3" name="detail_price2_3" value="<?php echo $val2[231];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price2_4">detail price2_4</label>
                                    <input type="text" class="form-control" id="detail_price2_4" name="detail_price2_4" value="<?php echo $val2[233];?>">
                                </div>
                                <div class="form-group">
                                    <label for="topic_price3">topic_price3</label>
                                    <input type="text" class="form-control" id="topic_price3" name="topic_price3" value="<?php echo $val2[235];?>">
                                </div>
                                <div class="form-group">
                                    <label for="price3">price3</label>
                                    <input type="text" class="form-control" id="price3" name="price3" value="<?php echo $val2[237];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price3_1">detail price3_1</label>
                                    <input type="text" class="form-control" id="detail_price3_1" name="detail_price3_1" value="<?php echo $val2[239];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price3_2">detail price3_2</label>
                                    <input type="text" class="form-control" id="detail_price3_2" name="detail_price3_2" value="<?php echo $val2[241];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price3_3">detail price3_3</label>
                                    <input type="text" class="form-control" id="detail_price3_3" name="detail_price3_3" value="<?php echo $val2[243];?>">
                                </div>
                                <div class="form-group">
                                    <label for="detail_price3_4">detail price3_4</label>
                                    <input type="text" class="form-control" id="detail_price3_4" name="detail_price3_4" value="<?php echo $val2[245];?>">
                                </div>
                            </div><br>
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
           <!-- เริ่มฟังก์ชันเลือก รูปภาพ -->
           <br><br>
            <h4>Choose Image for page</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Choose Image </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <form action="../service1.php" method="post">
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
                  

                  <label for="seleter1">Image 1 : Herder Service</label>
                  <div class="form-group" id="seleter1" name="seleter1">
                  <select class="custom-select" id="img47" name="img47">
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

                  <label for="seleter2">Image 2 : Image Content1</label>
                  <div class="form-group" id="seleter2" name="seleter2">
                  <select class="custom-select" id="img48" name="img48">
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
