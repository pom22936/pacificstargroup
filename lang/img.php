<?php 
     $con = mysqli_connect("localhost","root","poppom22936","final");
     mysqli_set_charset($con,"utf8");
     $sql_img = "SELECT img_name FROM `image`";
     $qre_img = mysqli_query($con,$sql_img);

    $post = array();
    $val = array();
    while($row = mysqli_fetch_array($qre_img))
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

     $img1 = $val[1];
     $img2 = $val[3];
     $img3 = $val[5];
     $img4 = $val[7];
     $img5 = $val[9];
     $img6 = $val[11];
     $img7 = $val[13];
     $img8 = $val[15];
     $img9 = $val[17];
     $img10 = $val[19];
     $img11 = $val[21];
     $img12 = $val[23];
     $img13 = $val[25];
     $img14 = $val[27];
     $img15 = $val[29];
     $img16 = $val[31];
     $img17 = $val[33];
     $img18 = $val[35];
     $img19 = $val[37];
     $img20 = $val[39];
     $img21 = $val[41];
     $img22 = $val[43];
     $img23 = $val[45];
     $img24 = $val[47];
     $img25 = $val[49];
?>
