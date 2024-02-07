<title>หน้าหลัก</title>
<?php include('hder.php'); //css 
include('../condb.php');
?>
<body>
 
  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php include('menu_l.php');?>
      </div>
      <div class="col-md-10">
        <h3 align="center">รายงาน</h3>
        <a href="report.php?act=d" class="btn btn-primary">รายวัน

        </a>
        <a href="report.php?act=m" class="btn btn-success">รายเดือน
 
        </a>
        <a href="report.php?act=y" class="btn btn-warning">รายปี

        </a>
        <a href="report.php?act=date" class="btn btn-danger">ดูตามวัน

        </a>
<?php 
$act = (isset($_GET['act']) ? $_GET['act'] : '');


if($act=='m'){
  include('report_month.php');
}elseif($act=='y'){
  include('report_yearly.php');
}elseif($act=='date'){
  include('report_daily.php');
}elseif($act=='rangdate'){
  include('report_rangdate.php');
}else{
  include('report_daily.php');
}
//elseif($act=='cancel'){
  //include('list_order_cancel.php');
//}else{
  //include('list_order_new.php');
//}

?>
    </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>