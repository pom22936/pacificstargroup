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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
    <input class="form-control form-control-dark w-100" id="myInput" type="text" placeholder="Search" aria-label="Search">
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
              <a class="nav-link active" href="../Admin/ContactAdmin.php">
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
          <h1 class="h2">YOU CAN EDIT PAGE Contact THIS HERE</h1>
        </div>
        <h3>DeTails Contact Us</h3>
        <div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">FullName</th>
                <th scope="col">Address</th>
                <th scope="col">Topic</th>
                <th scope="col">Text</th>
              </tr>
            </thead>

            
             <?php 
              $perpage = 8;//จำนวนหน้าที่จะโชว์ 
              if (isset($_GET['page'])) { //เช็คค่า ถ้าไม่มีค่า ให้ $page = 1 คือเริ่มหน้า 1 แหละ
              $page = $_GET['page'];
              } else {
              $page = 1;
              }
              $start = ($page - 1) * $perpage; //ตัวเริ่มแสดงข้อมูล เช่นอยู่หน้าแรก (1-1)*5 =0 คือ เริ่มต้นข้อมูลตัวที่ 0 คือตัวเเรกนั้นแหละ

             $getdatacontact = "SELECT * FROM `contact` ORDER BY id DESC limit {$start} , {$perpage} ";
             $querycontact = mysqli_query($dbcon,$getdatacontact);
             while ($row = mysqli_fetch_array($querycontact)) {
             ?>
             <tbody id="myTable">
             <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['fullname'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['topic'];?></td>
              <td><?php echo $row['text'];?></td>
             </tr>
              <?php }?>
            </tbody>
          </table>

              <?php
              $sql2 = "SELECT * FROM `contact`";
              $query2 = mysqli_query($dbcon, $sql2);
              $total_record = mysqli_num_rows($query2);//นับจำนวนในแถวข้อมูล ตัวอย่าง ได้ 21 แถว
              $total_page = ceil($total_record / $perpage);//หารปัดเศษขึ้น คือ 21/5 = 5 หน้า
              ?>

              <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                  <!-- ปุ้มย้อนกลับ โดยใส่หน้า 1-->
                      <li class="page-item">
                          <a class="page-link" href="../Admin/ContactAdmin.php?page=1" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          </a>
                      </li>
                      <?php for($i=1;$i<=$total_page;$i++){ ?> 
                      <!-- วนลูปสร้างตามจำนวนpageที่เราได้มาจากtotal_page -->
                      <li class="page-item">
                          <a class="page-link" href="../Admin/ContactAdmin.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                      </li>
                      <?php } ?>
                      <li class="page-item">
                      <!-- ปุ้มไปสุด โดยใส่หน้าสุดท้าย -->
                          <a class="page-link" href="../Admin/ContactAdmin.php?page=<?php echo $total_page;?>" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          </a>
                      </li>
                  </ul>
              </nav>

          <br>
          <h4>TEXT ON WEB</h4><br>
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
                      <form action="../sql/editcontactpageENG.php" method="post">
                        <h2>EditPage for Eng</h2><br>
                        <div class="form-group" >
                            <button type="submit" class="btn btn-primary pull-right">Save changes</button>
                        </div>
                        <br><br>
                        <div class="form-row">
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 1 : </h2>
                            <div class="form-group">
                              <label for="title_contact">title contact</label>
                              <input type="text" class="form-control" id="title_contact" name="title_contact" value="<?=$val[77]; ?>">
                            </div>
                            <div class="form-group"> 
                              <label for="topic_contect">Topic</label>
                              <input type="text" class="form-control" id="topic_contect" name="topic_contect" value="<?=$val[79]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="address_cont">address topic</label>
                              <input class="form-control" type="text" name="address_cont" id="address_cont" value="<?=$val[81]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="address_cont_dt">address detail</label>
                              <input class="form-control" type="text" name="address_cont_dt" id="address_cont_dt" value="<?=$val[83]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="phone_cont">phone topic</label>
                              <input class="form-control" type="text" name="phone_cont" id="phone_cont" value="<?=$val[85]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="phone_cont_dt">phone detail</label>
                              <input class="form-control" type="text" name="phone_cont_dt" id="phone_cont_dt" value="<?=$val[87]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="fax_cont">fax topic</label>
                              <input class="form-control" type="text" name="fax_cont" id="fax_cont" value="<?=$val[89]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="fax_cont_dt">fax detail</label>
                              <input class="form-control" type="text" name="fax_cont_dt" id="fax_cont_dt" value="<?=$val[91]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="email_cont">E-mail topic</label>
                              <input class="form-control" type="text" name="email_cont" id="email_cont" value="<?=$val[93]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="email_cont_dt">E-mail detail</label>
                              <input class="form-control" type="text" name="email_cont_dt" id="email_cont_dt" value="<?=$val[95]; ?>">
                            </div>
                          </div>

                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 2 : </h2>
                            <div class="form-group">
                              <label for="g_map_cont">Google map</label>
                              <input class="form-control" type="text" name="g_map_cont" id="g_map_cont" value="<?=$val[97]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="cont_form">Contect Form</label>
                              <input class="form-control" type="text" name="cont_form" id="cont_form" value="<?=$val[99]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="f_full_name">full name topic</label>
                              <input class="form-control" type="text" name="f_full_name" id="f_full_name" value="<?=$val[101]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="pl_f_full_name">placeholder full name</label>
                              <input class="form-control" type="text" name="pl_f_full_name" id="pl_f_full_name" value="<?=$val[103]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="f_email">E-mail topic</label>
                              <input class="form-control" type="text" name="f_email" id="f_email" value="<?=$val[105]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="pl_f_email">placeholder E-mail</label>
                              <input class="form-control" type="text" name="pl_f_email" id="pl_f_email" value="<?=$val[107]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="f_topic">topic</label>
                              <input class="form-control" type="text" name="f_topic" id="f_topic" value="<?=$val[109]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="pl_f_topic">placeholder topic</label>
                              <input class="form-control" type="text" name="pl_f_topic" id="pl_f_topic" value="<?=$val[111]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="f_text">text</label>
                              <input class="form-control" type="text" name="f_text" id="f_text" value="<?=$val[113]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="f_submit">submit</label>
                              <input class="form-control" type="text" name="f_submit" id="f_submit" value="<?=$val[115]; ?>">
                            </div>
                          </div>
                          <br>
                          <div class="form-group" >
                            <button type="submit" class="btn btn-primary ">Save changes</button>
                          </div>
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
                    <form action="../sql/editcontactpageVN.php" method="post">
                        <h2>EditPage for VN</h2>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary pull-right">Save changes</button>
                        </div><br><br>
                        <div class="form-row">
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 1 : </h2>
                            <div class="form-group">
                              <label for="title_contact">title contact</label>
                              <input type="text" class="form-control" id="title_contact" name="title_contact" value="<?=$val2[77]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="topic_contect">Topic</label>
                              <input type="text" class="form-control" id="topic_contect" name="topic_contect" value="<?=$val2[79]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="address_cont">address topic</label>
                              <input class="form-control" type="text" name="address_cont" id="address_cont" value="<?=$val2[81]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="address_cont_dt">address detail</label>
                              <input class="form-control" type="text" name="address_cont_dt" id="address_cont_dt" value="<?=$val2[83]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="phone_cont">phone topic</label>
                              <input class="form-control" type="text" name="phone_cont" id="phone_cont" value="<?=$val2[85]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="phone_cont_dt">phone detail</label>
                              <input class="form-control" type="text" name="phone_cont_dt" id="phone_cont_dt" value="<?=$val2[87]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="fax_cont">fax topic</label>
                              <input class="form-control" type="text" name="fax_cont" id="fax_cont" value="<?=$val2[89]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="fax_cont_dt">fax detail</label>
                              <input class="form-control" type="text" name="fax_cont_dt" id="fax_cont_dt" value="<?=$val2[91]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="email_cont">E-mail topic</label>
                              <input class="form-control" type="text" name="email_cont" id="email_cont" value="<?=$val2[93]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="email_cont_dt">E-mail detail</label>
                              <input class="form-control" type="text" name="email_cont_dt" id="email_cont_dt" value="<?=$val2[95]; ?>">
                            </div>
                          </div>

                          
                          <div style="border-style: solid; border-color: #000000; padding: 25px;" class="form-group col-md-6"> 
                          <h2>Content 2 : </h2>
                            <div class="form-group">
                              <label for="g_map_cont">Google map</label>
                              <input class="form-control" type="text" name="g_map_cont" id="g_map_cont" value="<?=$val2[97]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="cont_form">Contect Form</label>
                              <input class="form-control" type="text" name="cont_form" id="cont_form" value="<?=$val2[99]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="f_full_name">full name topic</label>
                              <input class="form-control" type="text" name="f_full_name" id="f_full_name" value="<?=$val2[101]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="pl_f_full_name">placeholder full name</label>
                              <input class="form-control" type="text" name="pl_f_full_name" id="pl_f_full_name" value="<?=$val2[103]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="f_email">E-mail topic</label>
                              <input class="form-control" type="text" name="f_email" id="f_email" value="<?=$val2[105]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="pl_f_email">placeholder E-mail</label>
                              <input class="form-control" type="text" name="pl_f_email" id="pl_f_email" value="<?=$val2[107]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="f_topic">topic</label>
                              <input class="form-control" type="text" name="f_topic" id="f_topic" value="<?=$val2[109]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="pl_f_topic">placeholder topic</label>
                              <input class="form-control" type="text" name="pl_f_topic" id="pl_f_topic" value="<?=$val2[111]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="f_text">text</label>
                              <input class="form-control" type="text" name="f_text" id="f_text" value="<?=$val2[113]; ?>">
                            </div>
                            <div class="form-group">
                              <label for="f_submit">submit</label>
                              <input class="form-control" type="text" name="f_submit" id="f_submit" value="<?=$val2[115]; ?>">
                            </div>
                          </div><br>
                        </div>
                        
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary ">Save changes</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- จบแก้ไขคำ -->

          <!-- เริ่มฟังก์ชันเลือก รูปภาพ -->
          <br><br>
            <h4>Choose Image for page</h4>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Choose Image </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">All Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="../contact.php" method="post">
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
				   
                  <label for="seleter1">Image 1 : Herder Contact</label>
                  <div class="form-group" id="seleter1" name="seleter1">
                  <select class="custom-select" id="img49" name="img49">
                    <option value="">Open this select menu</option>
                    <?php 
                      $sql_img = "SELECT * FROM `image`";
                      $qre_img = mysqli_query($dbcon,$sql_img);
                      while ($row = mysqli_fetch_array($qre_img)) {
                    ?>
                    <option   value="<?php echo $row['imageID'];?>" ><?php echo substr($row['img_name'],11); ?></option>
                    <?php }?>
                    </select>
                    
                  </div>

                  <label for="seleter2">Image 2 : Image Content1</label>
                  <div class="form-group" id="seleter2" name="seleter2">
                    <select class="custom-select" id="img50" name="img50">
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
            <!-- จบเลือกรูป -->
            <br><br>
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