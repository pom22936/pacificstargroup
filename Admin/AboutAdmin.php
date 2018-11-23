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
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php">PACIFICSTARGROUP</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
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
              <a class="nav-link active" href="../Admin/AboutAdmin.php">
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
          <h1 class="h2">YOU CAN EDIT PAGE ABOUT US THIS HERE</h1>
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
                      <form action="../sql/editaboutpageENG.php" method="post">
                        <h2>YOU CAN EditPage for Eng</h2>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary pull-right">Save changes</button>
                        </div><br><br>
                        <div class="form-row">
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 1 :</h2>
                            <div class="form-group">
                              <label for="title_about">title</label>
                              <input type="text" class="form-control" id="title_about" name="title_about" value="<?php echo $val[55];?>">
                            </div>
                            <div class="form-group">
                              <label for="topic_about">topic</label>
                              <input type="text" class="form-control" id="topic_about" name="topic_about" value="<?php echo $val[57];?>">
                            </div>
                            <div class="form-group">
                              <label for="idiom_about">idiom</label>
                              <input type="text" class="form-control" id="idiom_about" name="idiom_about" value="<?php echo $val[59];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ab1">Edit Detail content about us 1</label>
                              <textarea class="form-control" name="dt_ab1" id="dt_ab1" cols="15" rows="5" ><?php echo $val[61];?></textarea>
                            </div>
                            <div class="form-group">
                              <label for="dt_ab2">Edit Detail content about us 2</label>
                              <textarea class="form-control" name="dt_ab2" id="dt_ab2" cols="15" rows="5" ><?php echo $val[63];?></textarea>
                            </div>
                          </div>
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 2 :</h2>
                            <div class="form-group">
                              <label for="tp_ab_ct1">topic content about us 1</label>
                              <input type="text" class="form-control" id="tp_ab_ct1" name="tp_ab_ct1" value="<?php echo $val[65];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ab_ct1">Edit Detail content about us for topic 1 </label>
                              <textarea class="form-control" name="dt_ab_ct1" id="dt_ab_ct1" cols="15" rows="5"><?php echo $val[67];?></textarea>
                            </div>
                          </div>

                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 3 :</h2>
                            <div class="form-group">
                              <label for="tp_ab_ct2">topic content about us 3</label>
                              <input type="text" class="form-control" id="tp_ab_ct2" name="tp_ab_ct2" value="<?php echo $val[69];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ab_ct2">Edit Detail company1 </label>
                              <textarea class="form-control" name="dt_ab_ct2" id="dt_ab_ct2" cols="15" rows="5" ><?php echo $val[71];?></textarea>
                            </div>

                            <!-- เพื่มเติม about ครั่งที่ 1 -->
                            <div class="form-group">
                              <label for="dt_ab_com2">Edit Detail comapny2 </label>
                              <textarea class="form-control" name="dt_ab_com2" id="dt_ab_com2" cols="15" rows="5" ><?php echo $val[263];?></textarea>
                            </div><div class="form-group">
                              <label for="dt_ab_com3">Edit Detail company3 </label>
                              <textarea class="form-control" name="dt_ab_com3" id="dt_ab_com3" cols="15" rows="5" ><?php echo $val[265];?></textarea>
                            </div><div class="form-group">
                              <label for="dt_ab_com4">Edit Detail company4 </label>
                              <textarea class="form-control" name="dt_ab_com4" id="dt_ab_com4" cols="15" rows="5" ><?php echo $val[267];?></textarea>
                            </div><div class="form-group">
                              <label for="dt_ab_com5">Edit Detail company5 </label>
                              <textarea class="form-control" name="dt_ab_com5" id="dt_ab_com5" cols="15" rows="5" ><?php echo $val[269];?></textarea>
                            </div><div class="form-group">
                              <label for="dt_ab_com6">Edit Detail company6 </label>
                              <textarea class="form-control" name="dt_ab_com6" id="dt_ab_com6" cols="15" rows="5" ><?php echo $val[271];?></textarea>
                            </div>
                            <!-- จบการเพื่มเติม -->
                          </div>

                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 4 :</h2>
                            <div class="form-group">
                              <label for="tp_ab_ct3">topic content about us 4</label>
                              <input type="text" class="form-control" id="tp_ab_ct3" name="tp_ab_ct3" value="<?php echo $val[73];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ab_ct3">Edit Detail content about us for topic 4 </label>
                              <textarea class="form-control" name="dt_ab_ct3" id="dt_ab_ct3" cols="15" rows="5" ><?php echo $val[75];?></textarea>
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
                    <form action="../sql/editaboutpageVN.php" method="post">
                        <h2>EditPage for VN</h2>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary pull-right">Save changes</button>
                        </div><br><br>
                        <div class="form-row">
                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 1 :</h2>
                            <div class="form-group">
                              <label for="title_about">title</label>
                              <input type="text" class="form-control" id="title_about" name="title_about" value="<?php echo $val2[55];?>">
                            </div>
                            <div class="form-group">
                              <label for="topic_about">topic</label>
                              <input type="text" class="form-control" id="topic_about" name="topic_about" value="<?php echo $val2[57];?>">
                            </div>
                            <div class="form-group">
                              <label for="idiom_about">idiom</label>
                              <input type="text" class="form-control" id="idiom_about" name="idiom_about" value="<?php echo $val2[59];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ab1">Edit Detail content about us 1</label>
                              <textarea class="form-control" name="dt_ab1" id="dt_ab1" cols="15" rows="5" ><?php echo $val2[61];?></textarea>
                            </div>
                            <div class="form-group">
                              <label for="dt_ab2">Edit Detail content about us 2</label>
                              <textarea class="form-control" name="dt_ab2" id="dt_ab2" cols="15" rows="5"><?php echo $val2[63];?></textarea>
                            </div>
                          </div>

                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 2 :</h2>
                            <div class="form-group">
                              <label for="tp_ab_ct1">topic content about us 2</label>
                              <input type="text" class="form-control" id="tp_ab_ct1" name="tp_ab_ct1" value="<?php echo $val2[65];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ab_ct1">Edit Detail content about us for topic 2 </label>
                              <textarea class="form-control" name="dt_ab_ct1" id="dt_ab_ct1" cols="15" rows="5" ><?php echo $val2[67];?></textarea>
                            </div>
                          </div>

                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 3 :</h2>
                            <div class="form-group">
                              <label for="tp_ab_ct2">topic content about us 2</label>
                              <input type="text" class="form-control" id="tp_ab_ct2" name="tp_ab_ct2" value="<?php echo $val2[69];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ab_ct2">Edit Detail company1 </label>
                              <textarea class="form-control" name="dt_ab_ct2" id="dt_ab_ct2" cols="15" rows="5" ><?php echo $val2[71];?></textarea>
                            </div>
                            <!-- เพื่มเติม about ครั่งที่ 1 -->
                            <div class="form-group">
                              <label for="dt_ab_com2">Edit Detail comapny2 </label>
                              <textarea class="form-control" name="dt_ab_com2" id="dt_ab_com2" cols="15" rows="5" ><?php echo $val2[71];?></textarea>
                            </div><div class="form-group">
                              <label for="dt_ab_com3">Edit Detail company3 </label>
                              <textarea class="form-control" name="dt_ab_com3" id="dt_ab_com3" cols="15" rows="5" ><?php echo $val2[71];?></textarea>
                            </div><div class="form-group">
                              <label for="dt_ab_com4">Edit Detail company4 </label>
                              <textarea class="form-control" name="dt_ab_com4" id="dt_ab_com4" cols="15" rows="5" ><?php echo $val2[71];?></textarea>
                            </div><div class="form-group">
                              <label for="dt_ab_com5">Edit Detail company5 </label>
                              <textarea class="form-control" name="dt_ab_com5" id="dt_ab_com5" cols="15" rows="5" ><?php echo $val2[71];?></textarea>
                            </div><div class="form-group">
                              <label for="dt_ab_com6">Edit Detail company6 </label>
                              <textarea class="form-control" name="dt_ab_com6" id="dt_ab_com6" cols="15" rows="5" ><?php echo $val2[71];?></textarea>
                            </div>
                            <!-- จบการเพื่มเติม -->
                          </div>

                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 4 :</h2>
                            <div class="form-group">
                              <label for="tp_ab_ct3">topic content about us 4</label>
                              <input type="text" class="form-control" id="tp_ab_ct3" name="tp_ab_ct3" value="<?php echo $val2[73];?>">
                            </div>
                            <div class="form-group">
                              <label for="dt_ab_ct3">Edit Detail content about us for topic 4 </label>
                              <textarea class="form-control" name="dt_ab_ct3" id="dt_ab_ct3" cols="15" rows="5"><?php echo $val2[75];?></textarea>
                            </div>
                          </div>
                        </div>
                        
                        <br>
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
          <!-- จบ ฟังก์ชัน เซ็ต ภาษา -->


            <!-- เริ่มฟังก์ชันเลือก รูปภาพ -->
            <br><br>
            <h4>Choose Image for page</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Choose Image </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <form action="../about.php" method="post">
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

                  <label for="seleter1">HERDER ABOUT</label>
                  <div class="form-group" id="seleter1" name="seleter1">
                  <select class="custom-select" id="img35" name="img35">
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

                  <label for="seleter2">LOGO pacificstar group </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img36" name="img36">
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

                  <label for="seleter2">IMAGE for Content2 </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img37" name="img37">
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

                  <label for="seleter2">IMAGE for Content3-1 </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img38" name="img38">
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

                  <label for="seleter2">IMAGE for Content3-2 </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img39" name="img39">
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

                   <label for="seleter2">IMAGE for Content3-3 </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img40" name="img40">
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

                   <label for="seleter2">IMAGE for Content3-4 </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img41" name="img41">
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

                  <label for="seleter2">IMAGE for Content3-5 </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img42" name="img42">
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

                  <label for="seleter2">IMAGE for Content3-6 </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img43" name="img43">
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

                  <label for="seleter2">IMAGE for Content4 </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img44" name="img44">
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

                  <label for="seleter2">IMAGE for Content5 </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img45" name="img45">
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

                  <label for="seleter2">IMAGE for Content6 </label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img46" name="img46">
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