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
              <a class="nav-link active" href="../Admin/AdminNews.php">
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
          <h1 class="h2">YOU CAN EDIT PAGE NEWS THIS HERE</h1>
        </div>

        <h3>ADD NEWS</h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> ADD NEWS THIS!!</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">NEWS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form action="../sql/insertNews.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="photos">Select:IMAGE </label>
                    <input class="form-control" type="file" name="photos[]" id="photoimg" multiple="multiple" required>
                  </div>
                  <div class="form-group">
                    <label for="topic">TOPIC ENG NEWS : </label>
                    <input type="text" class="form-control" name="topic" id="topic" required>
                  </div>
                  <div class="form-group">
                    <label for="content">CONTENT ENG NEWS : </label>
                    <textarea class="form-control" name="content" id="content" cols="15" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="topic_vn">TOPIC VN  NEWS : </label>
                    <input type="text" class="form-control" name="topic_vn" id="topic_vn" required>
                  </div>
                  <div class="form-group">
                    <label for="content_vn">CONTENT VN NEWS : </label>
                    <textarea class="form-control" name="content_vn" id="content_vn" cols="15" rows="5"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- จบโมเดล -->
        <br><br><br>
        <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th >#</th>
                    <th >IMAGE</th>
                    <th >CONTENT</th>
                    <th> CONTENT VN</th>
                    <th >EDIT</th>
                    <th >DELETE</th>
                  </tr>
                </thead>
                
                <?php 
                $perpage = 5;//จำนวนหน้าที่จะโชว์ 
                if (isset($_GET['page'])) { //เช็คค่า ถ้าไม่มีค่า ให้ $page = 1 คือเริ่มหน้า 1 แหละ
                $page = $_GET['page'];
                } else {
                $page = 1;
                }
                $start = ($page - 1) * $perpage; //ตัวเริ่มแสดงข้อมูล เช่นอยู่หน้าแรก (1-1)*5 =0 คือ เริ่มต้นข้อมูลตัวที่ 0 คือตัวเเรกนั้นแหละ

                $sql_select ="SELECT * FROM `tb_new` ORDER BY id  limit {$start} , {$perpage} ";
                $query_news = mysqli_query($dbcon,$sql_select);
                while ($row = mysqli_fetch_array($query_news)) {
                ?>
                <tbody id="myTable">
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><img src="<?php echo $row['img'];?>" alt="img" width="250px" height="250px"></td>
                    <td>
                    <h3>
                        <?php echo $row['topic'];?>
                    </h3><br>
                    <span>
                        <?php echo substr($row['content'],0,255).'[.......]';?></span>
                        <p align="right"><a class="btn btn-primary" href="../detail.php?new_id=<?php echo $row['id'];?>">view</a></p>
                    </td>
                    <td>
                    <h3>
                        <?php echo $row['topic_vn'];?>
                    </h3><br>
                    <span>
                        <?php echo substr($row['content_vn'],0,255).' [.......]';?></span>
                        <p align="right"><a class="btn btn-primary" href="../detail.php?new_id=<?php echo $row['id'];?>">Chi tiết...</a></p>
                    </td>
                    <td><a type="submit" class="btn btn-success" style="border-radius: 25px !important;" href="../Admin/ADeditnews.php?enew_id=<?php echo $row['id'];?>"> EDIT HERE </button></td>
                    <td><button type="submit" class="btn btn-danger" onclick="myFunction(<?php echo $row['id'];?>)" style="border-radius: 25px;">DELETE</a></td>
                  </tr>
                </tbody>
                <?php } ?>
              </table>

                  <script>
                  function myFunction(num) {
                      var txt;
                      var r = confirm("Are you sure!! do you want datate this new");
                      if (r == true) {
                          window.location.assign("../sql/deleteNews.php?denew_id="+num);
                      } else {
                          window.location.assign("#");
                      }
                  }
                  </script>

              <?php
              $sql2 = "SELECT * FROM `tb_new`";
              $query2 = mysqli_query($dbcon, $sql2);
              $total_record = mysqli_num_rows($query2);//นับจำนวนในแถวข้อมูล ตัวอย่าง ได้ 21 แถว
              $total_page = ceil($total_record / $perpage);//หารปัดเศษขึ้น คือ 21/5 = 5 หน้า
              ?>
              
              <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                  <!-- ปุ้มย้อนกลับ โดยใส่หน้า 1-->
                      <li class="page-item">
                          <a class="page-link" href="../Admin/AdminNews.php?page=1" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          </a>
                      </li>
                      <?php for($i=1;$i<=$total_page;$i++){ ?> 
                      <!-- วนลูปสร้างตามจำนวนpageที่เราได้มาจากtotal_page -->
                      <li class="page-item">
                          <a class="page-link" href="../Admin/AdminNews.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                      </li>
                      <?php } ?>
                      <li class="page-item">
                      <!-- ปุ้มไปสุด โดยใส่หน้าสุดท้าย -->
                          <a class="page-link" href="../Admin/AdminNews.php?page=<?php echo $total_page;?>" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          </a>
                      </li>
                  </ul>
              </nav>

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