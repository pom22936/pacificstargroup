<?php 
    $con = mysqli_connect("localhost","root","poppom22936","final");
    mysqli_set_charset($con,"utf8");
    $sql = "SELECT content FROM `en`";
    $q = mysqli_query($con,$sql);
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
// หน้าindex
    $title_index = $val[1];
    $topic_index_content1 = $val[3];
    $detail_index_content1 = $val[5];
    $st1_ct1 = $val[7];
    $dt1_ct1 = $val[9];
    $st2_ct1 = $val[11];
    $dt2_ct1 = $val[13];
    $st3_ct1 = $val[15];
    $dt3_ct1 = $val[17];
    $topic_index_content2 = $val[19];
    $detail_index_content2 = $val[21];
    $st1_ct2 = $val[23];
    $dt1_ct2 = $val[25];
    $st2_ct2 = $val[27];
    $dt2_ct2 = $val[29];
    $st3_ct2 = $val[31];
    $dt3_ct2 = $val[33];
    $topic_index_content3 = $val[35];
    $detail_index_content3 = $val[37];
    $topic_index_content4 = $val[39];
    $topic_index_content5 = $val[41];
    $st1_ct5 = $val[43];
    $dt1_ct5 = $val[45];
    $st2_ct5 = $val[47];
    $dt2_ct5 = $val[49];
    $st3_ct5 = $val[51];
    $dt3_ct5 = $val[53];
// จบหน้า index
// หน้า about
    $title_about = $val[55];
    $topic_about = $val[57];
    $idiom_about = $val[59];
    $dt_ab1 = $val[61];
    $dt_ab2 = $val[63];
    $tp_ab_ct1 = $val[65];
    $dt_ab_ct1 = $val[67];
    $tp_ab_ct2 = $val[69];
    $dt_ab_ct2 = $val[71];
    $tp_ab_ct3 = $val[73];
    $dt_ab_ct3 = $val[75];
// จบหน้า about
//หน้า contact
    $title_contact = $val[77];
    $topic_contect = $val[79];
    $address_cont = $val[81];
    $address_cont_dt = $val[83];
    $phone_cont = $val[85];
    $phone_cont_dt = $val[87];
    $fax_cont = $val[89];
    $fax_cont_dt = $val[91];
    $email_cont = $val[93];
    $email_cont_dt = $val[95];
    $g_map_cont = $val[97];
    $cont_form = $val[99];
    $f_full_name = $val[101];
    $pl_f_full_name = $val[103];
    $f_email = $val[105];
    $pl_f_email = $val[107];
    $f_topic = $val[109];
    $pl_f_topic = $val[111];
    $f_text = $val[113];
    $f_submit = $val[115];
// จบหน้า contact
//หน้า service
     $title_service = $val[117];
     $topic_ct_service1 = $val[119];
     $detail_ct_service1 = $val[121];
     $topic_ct_service2 = $val[123];
     $topic_A = $val[125];
     $detail_A = $val[127];
     $topic_B = $val[129];
     $detail_B = $val[131];
     $topic_C = $val[133];
     $detail_C = $val[135];
     $sup_topic_C1 = $val[137];
     $sup_topic_C2 = $val[139];
     $sup_topic_C3 = $val[141];
     $topic_D = $val[143];
     $detail_D = $val[145];
     $sup_topic_D1 = $val[147];
     $sup_topic_D2 = $val[149];
     $sup_topic_D3 = $val[151];
     $sup_topic_D4 = $val[153];
     $topic_E = $val[155];
     $detail_E = $val[157];
     $sup_topic_E1 = $val[159];
     $sup_topic_E2 = $val[161];
     $sup_topic_E3 = $val[163];
     $sup_topic_E4 = $val[165];
     $topic_F = $val[167];
     $detail_F =$val[169];
     $sup_topic_F1 = $val[171];
     $sup_topic_F2 = $val[173];
     $sup_topic_F3 = $val[175];
     $sup_topic_F4 = $val[177];
     $sup_topic_F5 = $val[179];
     $sup_topic_F6 = $val[181];
     $topic_G = $val[183];
     $detail_G = $val[185];
     $topic_H = $val[187];
     $detail_H = $val[189];
     $topic_I = $val[191];
     $sup_topic_I1 = $val[193];
     $sup_topic_I2 = $val[195];
     $sup_topic_I3 = $val[197];
     $sup_topic_I4 = $val[199];
     $sup_topic_I5 = $val[201];
     $sup_topic_I6 = $val[203];
     $topic_K = $val[205];
     $detail_K = $val[207];
     $topic_ct_service3 = $val[209];
     $topic_price1 = $val[211];
     $price1 = $val[213];
     $detail_price1_1 = $val[215];
     $detail_price1_2 = $val[217];
     $detail_price1_3 = $val[219];
     $detail_price1_4 = $val[221];
     $topic_price2 = $val[223];
     $price2 = $val[225];
     $detail_price2_1 = $val[227];
     $detail_price2_2 = $val[229];
     $detail_price2_3 = $val[231];
     $detail_price2_4 = $val[233];
     $topic_price3 = $val[235];
     $price3 = $val[237];
     $detail_price3_1 = $val[239];
     $detail_price3_2 = $val[241];
     $detail_price3_3 = $val[243];
     $detail_price3_4 = $val[245];

//จบหน้า service
//ปรับ ดีไซต์ ครั่งที่ 1

     //หน้า index แก้ไขครั่งที่ 1
     //contant2
     $st4_ct2 = $val[247];
     $dt4_ct2 = $val[249];
     //contant5
     $st4_ct5 = $val[251];
     $dt4_ct5 = $val[253];
     $st5_ct5 = $val[255];
     $dt5_ct5 = $val[257];
     $st6_ct5 = $val[259];
     $dt6_ct5 = $val[261];
     //จบการแก้ไขหน้า index

     //หน้า about แก้ไขครั่งที่ 1
     //content company
     $detail_com2 = $val[263];
     $detail_com3 = $val[265];
     $detail_com4 = $val[267];
     $detail_com5 = $val[269];
     $detail_com6 = $val[271];
    //จบการปรับ

    //HERDER
     $name_com = $val[273];
     $manu1 = $val[275];
     $manu1_1 = $val[277];
     $manu1_2 = $val[279];
     $maun1_3 = $val[281];
     $manu1_4 = $val[283];
     $manu1_5 = $val[285];
     $manu1_6 = $val[287];
     $manu2 = $val[289];
     $manu3 = $val[291];
     $manu4 = $val[293];
     $manu5 = $val[295];
     //end herder

     // footer
     $footer1 = $val[297];
     $detail_footer1 = $val[299];
     $footer2 = $val[301];
     $detail_footer2 = $val[303];
     $footer3 = $val[305];
     $detail_footer3_1 = $val[307];
     $detail_footer3_2 = $val[309];
     $detail_footer3_3 = $val[311];
     $detail_footer3_4 = $val[313];
     $footer4 = $val[315];
     //endfooter

     //incoterm
     $incoterm = $val[317];
     $incoterm_detail = $val[319];
     $new1 = $val[321];
     $new1_detail = $val[323];
     $new2 = $val[325];
     $new2_detail = $val[327];
     $new3 = $val[329];
     $new3_detail = $val[331];
     $new4 = $val[333];
     $new4_detail = $val[335];
     $new5 = $val[337];
     $new5_detail = $val[339];
     $new6 = $val[341];
     $new6_detail = $val[343];
     $new7 = $val[345];
     $new7_detail = $val[347];
     $new8 = $val[349];
     $new8_detail = $val[351];
     $new9 = $val[353];
     $new9_detail = $val[355];
     $new10 = $val[357];
     $new10_detail = $val[359];
     $new11 = $val[361];
     $new11_detail = $val[363];
     //end incoterm

?>