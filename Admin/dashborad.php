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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    

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
                <a class="nav-link active" href="../Admin/dashborad.php">
                  <span data-feather="home"></span>
                  index <span class="sr-only">(current)</span>
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
            <h1 class="h2">YOU CAN EDIT PAGE INDEX THIS HERE</h1>
          </div>
            <h4>TEXT ON WEB</h4><br>
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne" style="background-color: #99c2ff;">
                <h5 class="mb-0" >
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne" >
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
                      <form action="../sql/editdashboradpageENG.php" method="post">
                        <h2>EditPage for Eng</h2>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary pull-right">Save changes</button>
                        </div><br><br>
                        <div class="form-row">
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6">
                          <h2>content 1 : </h2>
                            <div class="form-group">
                              <label for="title_index">title</label>
                              <input type="text" class="form-control" id="title_index" name="title_index" value="<?php echo $val[1];?>">
                            </div>
                            <div class="form-group">
                              <label for="topic_index_content1">edit topic index content1</label>
                              <input type="text" class="form-control" id="topic_index_content1" name="topic_index_content1" value="<?php echo $val[3];?>">
                            </div>
                            <div class="form-group">
                              <label for="detail_index_content1">edit detail index content1</label>
                              <textarea class="form-control" name="detail_index_content1" id="detail_index_content1" cols="15" rows="5" ><?php echo $val[5];?></textarea>
                            </div>
                            <div class="form-group">
                              <label for="st1_ct1">sub topic1</label>
                              <input type="text" class="form-control" id="st1_ct1" name="st1_ct1" value="<?php echo $val[7];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt1_ct1">Edit Discription for SubTopic 1</label>
                              <textarea class="form-control" name="dt1_ct1" id="dt1_ct1" cols="15" rows="5" ><?php echo $val[9];?></textarea>
                            </div>

                            <div class="form-group">
                              <label for="st2_ct1">SubTopic 2</label>
                              <input type="text" class="form-control" id="st2_ct1" name="st2_ct1" value="<?php echo $val[11];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt2_ct1">Edit Discription for SubTopic 2</label>
                              <textarea class="form-control" name="dt2_ct1" id="dt2_ct1" cols="15" rows="5" ><?php echo $val[13];?></textarea>
                            </div>

                            <div class="form-group">
                              <label for="st3_ct1">SubTopic 3</label>
                              <input type="text" class="form-control" id="st3_ct1" name="st3_ct1" value="<?php echo $val[15];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt3_ct1">Edit Discription for SubTopic 3</label>
                              <textarea class="form-control" name="dt3_ct1" id="dt3_ct1" cols="15" rows="5" ><?php echo $val[17];?></textarea>
                            </div>

                            <!--End content 1 -->
                          </div>
                          
                          <!-- content 2 -->
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>content 2 : </h2>
                          <div class="form-group">
                            <label for="topic_index_content2">Topic 2 content2</label>
                            <input type="text" class="form-control" id="topic_index_content2" name="topic_index_content2" value="<?php echo $val[19];?>">
                          </div>
                          <div class="form-group">
                            <label for="detail_index_content2">Edit Discription for Topic 1</label>
                            <textarea class="form-control" name="detail_index_content2" id="detail_index_content2" cols="15" rows="5" ><?php echo $val[21];?></textarea>
                          </div>
                          
                          <div class="form-group">
                            <label for="st1_ct2">SubTopic 1</label>
                            <input type="text" class="form-control" id="st1_ct2" name="st1_ct2" value="<?php echo $val[23];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt1_ct2">Edit Discription for SubTopic 1</label>
                            <textarea class="form-control" name="dt1_ct2" id="dt1_ct2" cols="15" rows="5" ><?php echo $val[25];?></textarea>
                          </div>

                          <div class="form-group">
                            <label for="st2_ct2">SubTopic 2</label>
                            <input type="text" class="form-control" id="st2_ct2" name="st2_ct2" value="<?php echo $val[27];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt2_ct2">Edit Discription for SubTopic 2</label>
                            <textarea class="form-control" name="dt2_ct2" id="dt2_ct2" cols="15" rows="5" ><?php echo $val[29];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="st3_ct2">SubTopic 3</label>
                            <input type="text" class="form-control" id="st3_ct2" name="st3_ct2" value="<?php echo $val[31];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt3_ct2">Edit Discription for SubTopic 3</label>
                            <textarea class="form-control" name="dt3_ct2" id="dt3_ct2" cols="15" rows="5" ><?php echo $val[33];?></textarea>
                          </div>
                          <!--เพื่มเติม ครั่ง1 ที่contant2 -->
                          <div class="form-group">
                            <label for="st4_ct2">SubTopic 4</label>
                            <input type="text" class="form-control" id="st4_ct2" name="st4_ct2" value="<?php echo $val[247];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt4_ct2">Edit Discription for SubTopic 4</label>
                            <textarea class="form-control" name="dt4_ct2" id="dt4_ct2" cols="15" rows="5" ><?php echo $val[249];?></textarea>
                          </div>
                          <!-- จบการเพื่มเติม -->
                          </div>
                          <!--End content 2 -->

                          <!-- content 3 -->
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6">
                          <h2>content 3</h2>
                            <div class="form-group">
                              <label for="topic_index_content3">Topic 3 content3</label>
                              <input type="text" class="form-control" id="topic_index_content3" name="topic_index_content3" value="<?php echo $val[35];?>">
                            </div>
                            <div class="form-group">
                              <label for="detail_index_content3">Edit Discription for Topic 1</label>
                              <textarea class="form-control" name="detail_index_content3" id="detail_index_content3" cols="15" rows="5" ><?php echo $val[37];?></textarea>
                            </div>
                          </div>
                          <!--End content 3 -->

                          <!-- content 4 -->
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6">
                          <h2>content 4</h2>
                            <div class="form-group">
                              <label for="topic_index_content4">Topic 4 content4</label>
                              <input type="text" class="form-control" id="topic_index_content4" name="topic_index_content4" value="<?php echo $val[39];?>">
                            </div>
                          </div>
                          <!--End content 4 -->

                          <!-- content 5 -->
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6">
                          <h2>content 5</h2>
                            <div class="form-group">
                              <label for="topic_index_content5">Topic 5 content5</label>
                              <input type="text" class="form-control" id="topic_index_content5" name="topic_index_content5" value="<?php echo $val[41];?>">
                            </div>
                          <div class="form-group">
                            <label for="st1_ct5">SubTopic 1</label>
                            <input type="text" class="form-control" id="st1_ct5" name="st1_ct5" value="<?php echo $val[43];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt1_ct5">Edit Discription for SubTopic 1</label>
                            <textarea class="form-control" name="dt1_ct5" id="dt1_ct5" cols="15" rows="5" ><?php echo $val[45];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="st2_ct5">SubTopic 2</label>
                            <input type="text" class="form-control" id="st2_ct5" name="st2_ct5" value="<?php echo $val[47];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt2_ct5">Edit Discription for SubTopic 2</label>
                            <textarea class="form-control" name="dt2_ct5" id="dt2_ct5" cols="15" rows="5" ><?php echo $val[49];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="st3_ct5">SubTopic 3</label>
                            <input type="text" class="form-control" id="st3_ct5" name="st3_ct5" value="<?php echo $val[51];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt3_ct5">Edit Discription for SubTopic 3</label>
                            <textarea class="form-control" name="dt3_ct5" id="dt3_ct5" cols="15" rows="5" ><?php echo $val[53];?></textarea>
                          </div>

                          <!-- แก้ไขเพื่มเติมครั่งที่ 1 คอนเท็น 5 -->
                          <div class="form-group">
                            <label for="st4_ct5">SubTopic 4</label>
                            <input type="text" class="form-control" id="st4_ct5" name="st4_ct5" value="<?php echo $val[251];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt4_ct5">Edit Discription for SubTopic 4</label>
                            <textarea class="form-control" name="dt4_ct5" id="dt4_ct5" cols="15" rows="5" ><?php echo $val[253];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="st5_ct5">SubTopic 5</label>
                            <input type="text" class="form-control" id="st5_ct5" name="st5_ct5" value="<?php echo $val[255];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt5_ct5">Edit Discription for SubTopic 5</label>
                            <textarea class="form-control" name="dt5_ct5" id="dt5_ct5" cols="15" rows="5" ><?php echo $val[257];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="st6_ct5">SubTopic 6</label>
                            <input type="text" class="form-control" id="st6_ct5" name="st6_ct5" value="<?php echo $val[259];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt6_ct5">Edit Discription for SubTopic 6</label>
                            <textarea class="form-control" name="dt6_ct5" id="dt6_ct5" cols="15" rows="5" ><?php echo $val[261];?></textarea>
                          </div>
                          <!-- จบการแก้ไข -->
                          </div>
                          <!--End content 5 -->
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

            <div class="card">
              <div class="card-header" id="headingTwo" style="background-color: #ff9999;">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    Edit Text VN
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                    <form action="../sql/wditdashboradpageVN.php" method="post">
                        <h2>EditPage for VN</h2>
                        <!-- content 1 -->
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary pull-right">Save changes</button>
                        </div><br><br>
                        <div class="form-row">
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>content 1</h2>
                          <div class="form-group">
                            <label for="title_index">title</label>
                            <input type="text" class="form-control" id="title_index" name="title_index" value="<?php echo $val2[1];?>">
                          </div>
                          <div class="form-group">
                            <label for="topic_index_content1">edit topic index content1</label>
                            <input type="text" class="form-control" id="topic_index_content1" name="topic_index_content1" value="<?php echo $val2[3];?>">
                          </div>
                          <div class="form-group">
                            <label for="detail_index_content1">edit detail index content1</label>
                            <textarea class="form-control" name="detail_index_content1" id="detail_index_content1" cols="15" rows="5" ><?php echo $val2[5];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="st1_ct1">sub topic1</label>
                            <input type="text" class="form-control" id="st1_ct1" name="st1_ct1" value="<?php echo $val2[7];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt1_ct1">Edit Discription for SubTopic 1</label>
                            <textarea class="form-control" name="dt1_ct1" id="dt1_ct1" cols="15" rows="5" ><?php echo $val2[9];?></textarea>
                          </div>

                          <div class="form-group">
                            <label for="st2_ct1">SubTopic 2</label>
                            <input type="text" class="form-control" id="st2_ct1" name="st2_ct1" value="<?php echo $val2[11];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt2_ct1">Edit Discription for SubTopic 2</label>
                            <textarea class="form-control" name="dt2_ct1" id="dt2_ct1" cols="15" rows="5" ><?php echo $val2[13];?></textarea>
                          </div>

                          <div class="form-group">
                            <label for="st3_ct1">SubTopic 2</label>
                            <input type="text" class="form-control" id="st3_ct1" name="st3_ct1" value="<?php echo $val2[15];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt3_ct1">Edit Discription for SubTopic 2</label>
                            <textarea class="form-control" name="dt3_ct1" id="dt3_ct1" cols="15" rows="5" ><?php echo $val2[17];?></textarea>
                          </div>
                        </div>

                          <!--End content 1 -->

                          <!-- content 2 -->
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6">
                          <h2>content 2</h2> 
                          <div class="form-group">
                            <label for="topic_index_content2">Topic 2 content2</label>
                            <input type="text" class="form-control" id="topic_index_content2" name="topic_index_content2" value="<?php echo $val2[19];?>">
                          </div>
                          <div class="form-group">
                            <label for="detail_index_content2">Edit Discription for Topic 1</label>
                            <textarea class="form-control" name="detail_index_content2" id="detail_index_content2" cols="15" rows="5" ><?php echo $val2[21];?></textarea>
                          </div>
                          
                          <div class="form-group">
                            <label for="st1_ct2">SubTopic 1</label>
                            <input type="text" class="form-control" id="st1_ct2" name="st1_ct2" value="<?php echo $val2[23];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt1_ct2">Edit Discription for SubTopic 1</label>
                            <textarea class="form-control" name="dt1_ct2" id="dt1_ct2" cols="15" rows="5" ><?php echo $val2[25];?></textarea>
                          </div>

                          <div class="form-group">
                            <label for="st2_ct2">SubTopic 2</label>
                            <input type="text" class="form-control" id="st2_ct2" name="st2_ct2" value="<?php echo $val2[27];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt2_ct2">Edit Discription for SubTopic 2</label>
                            <textarea class="form-control" name="dt2_ct2" id="dt2_ct2" cols="15" rows="5" ><?php echo $val2[29];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="st3_ct2">SubTopic 3</label>
                            <input type="text" class="form-control" id="st3_ct2" name="st3_ct2" value="<?php echo $val2[31];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt3_ct2">Edit Discription for SubTopic 3</label>
                            <textarea class="form-control" name="dt3_ct2" id="dt3_ct2" cols="15" rows="5" ><?php echo $val2[33];?></textarea>
                          </div>
                          <!-- เริ่มการแก้ไขครั่งที่ 1 -->
                          <div class="form-group">
                            <label for="st4_ct2">SubTopic 4</label>
                            <input type="text" class="form-control" id="st4_ct2" name="st4_ct2" value="<?php echo $val2[247];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt4_ct2">Edit Discription for SubTopic 4</label>
                            <textarea class="form-control" name="dt4_ct2" id="dt4_ct2" cols="15" rows="5" ><?php echo $val2[249];?></textarea>
                          </div>
                          <!-- จบการเพื่มเติม -->
                          </div>
                          <!--End content 2 -->


                          <!-- content 3 -->
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>content 3</h2>
                            <div class="form-group">
                              <label for="topic_index_content3">Topic 3 content3</label>
                              <input type="text" class="form-control" id="topic_index_content3" name="topic_index_content3" value="<?php echo $val2[35];?>">
                            </div>
                            <div class="form-group">
                              <label for="detail_index_content3">Edit Discription for Topic 1</label>
                              <textarea class="form-control" name="detail_index_content3" id="detail_index_content3" cols="15" rows="5" ><?php echo $val2[37];?></textarea>
                            </div>
                          </div>
                          <!--End content 3 -->

                          <!-- content 4 -->
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>content 4</h2>
                            <div class="form-group">
                              <label for="topic_index_content4">Topic 4 content4</label>
                              <input type="text" class="form-control" id="topic_index_content4" name="topic_index_content4" value="<?php echo $val2[39];?>">
                            </div>
                          </div>
                          <!--End content 4 -->

                          <!-- content 5 -->
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>content 5</h2>
                            <div class="form-group">
                              <label for="topic_index_content5">Topic 5 content5</label>
                              <input type="text" class="form-control" id="topic_index_content5" name="topic_index_content5" value="<?php echo $val2[41];?>">
                            </div>
                            <div class="form-group">
                            <label for="st1_ct5">SubTopic 1</label>
                            <input type="text" class="form-control" id="st1_ct5" name="st1_ct5" value="<?php echo $val2[43];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt1_ct5">Edit Discription for SubTopic 1</label>
                            <textarea class="form-control" name="dt1_ct5" id="dt1_ct5" cols="15" rows="5" ><?php echo $val2[45];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="st2_ct5">SubTopic 2</label>
                            <input type="text" class="form-control" id="st2_ct5" name="st2_ct5" value="<?php echo $val2[47];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt2_ct5">Edit Discription for SubTopic 2</label>
                            <textarea class="form-control" name="dt2_ct5" id="dt2_ct5" cols="15" rows="5" ><?php echo $val2[49];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="st3_ct5">SubTopic 3</label>
                            <input type="text" class="form-control" id="st3_ct5" name="st3_ct5" value="<?php echo $val2[51];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt3_ct5">Edit Discription for SubTopic 3</label>
                            <textarea class="form-control" name="dt3_ct5" id="dt3_ct5" cols="15" rows="5" ><?php echo $val2[53];?></textarea>
                          </div>

                          <!-- แก้ไขเพื่มเติมครั่งที่ 1 คอนเท็น 5 -->
                          <div class="form-group">
                            <label for="st4_ct5">SubTopic 4</label>
                            <input type="text" class="form-control" id="st4_ct5" name="st4_ct5" value="<?php echo $val2[251];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt4_ct5">Edit Discription for SubTopic 4</label>
                            <textarea class="form-control" name="dt4_ct5" id="dt4_ct5" cols="15" rows="5" ><?php echo $val2[253];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="st5_ct5">SubTopic 5</label>
                            <input type="text" class="form-control" id="st5_ct5" name="st5_ct5" value="<?php echo $val2[255];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt5_ct5">Edit Discription for SubTopic 5</label>
                            <textarea class="form-control" name="dt5_ct5" id="dt5_ct5" cols="15" rows="5" ><?php echo $val2[257];?></textarea>
                          </div>
                          <div class="form-group">
                            <label for="st6_ct5">SubTopic 6</label>
                            <input type="text" class="form-control" id="st6_ct5" name="st6_ct5" value="<?php echo $val2[259];?>">
                          </div>
                          <div class="form-group">
                            <label for="dt6_ct5">Edit Discription for SubTopic 6</label>
                            <textarea class="form-control" name="dt6_ct5" id="dt6_ct5" cols="15" rows="5" ><?php echo $val2[261];?></textarea>
                          </div>
                          <!-- จบการแก้ไข -->
                          </div>
                          <!--End content 5 -->
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
            <!-- จบ ฟังก์ชัน เซ็ต ภาษา -->


            <!-- เริ่มฟังก์ชันเลือก รูปภาพ -->
            <br><br>
            <h4>Choose Image for page</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Choose Image </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <form action="../index.php" method="post">
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

                   <label for="seleter1">Image slider1: </label>
                  <div class="form-group" id="sl1" name="sl1">
                  <select class="custom-select" id="slide1" name="slide1" >
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

                  <label for="seleter1">Image slider2: </label>
                  <div class="form-group" id="sl2" name="sl2">
                  <select class="custom-select" id="slide2" name="slide2" >
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter1">Image slider3: </label>
                  <div class="form-group" id="sl3" name="sl3">
                  <select class="custom-select" id="slide3" name="slide3" >
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter1">Image Content 1-1 : </label>
                  <div class="form-group" id="seleter1" name="seleter1">
                  <select class="custom-select" id="img6" name="img6" >
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter2">Image Content2-1 : </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                  <select class="custom-select" id="img7" name="img7">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter3">Image Content2-2 : </label>
                  <div class="form-group" id="seleter3" name="seleter3">
                  <select class="custom-select" id="img8" name="img8">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter4">Image Content2-3: </label>
                  <div class="form-group" id="seleter4" name="seleter4">
                  <select class="custom-select" id="img9" name="img9">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter5">Image Content2-4 : </label>
                  <div class="form-group" id="seleter5" name="seleter5">
                  <select class="custom-select" id="img10" name="img10">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter6">3D image box1-1 </label>
                  <div class="form-group" id="seleter6" name="seleter6">
                  <select class="custom-select" id="img11" name="img11">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter7">3D image box1-2 </label>
                  <div class="form-group" id="seleter7" name="seleter7">
                  <select class="custom-select" id="img12" name="img12">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box1-3 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img13" name="img13">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box2-1 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img14" name="img14">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box2-2 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img15" name="img15">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box2-3 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img16" name="img16">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box3-1 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img17" name="img17">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box3-2 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img18" name="img18">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box3-3 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img19" name="img19">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box4-1 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img20" name="img20">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box4-2 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img21" name="img21">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box4-3 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img22" name="img22">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box5-1 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img23" name="img23">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box5-2 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img24" name="img24">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box5-3 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img25" name="img25">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box6-1 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img26" name="img26">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box6-2 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img27" name="img27">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">3D image box6-3 </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img28" name="img28">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">logo vssa </label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img29" name="img29">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">logo pasl</label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img30" name="img30">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">logo BINH TUONG</label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img31" name="img31">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">logo PASA</label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img32" name="img32">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">logo AMASIS</label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img33" name="img33">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
                      <?php }?>
                    </select>
                  </div>

                  <label for="seleter8">logo VIHA</label>
                  <div class="form-group" id="seleter8" name="seleter8">
                  <select class="custom-select" id="img34" name="img34">
                    <option value="">Open this select menu</option>
                      <?php 
                        $sql_img = "SELECT * FROM `image`";
                        $qre_img = mysqli_query($dbcon,$sql_img);
                        while ($row = mysqli_fetch_array($qre_img)) {
                      ?>
                      <option value="<?php echo $row['imageID'];?>"><?php echo substr($row['img_name'],11); ?></option>
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
