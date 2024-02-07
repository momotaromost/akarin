<title>หน้าหลัก</title>
<?php include('hder.php'); //css 
include('../condb.php');
$querystatus1 ="SELECT o_status, COUNT(o_id) as s1total
FROM order_head
WHERE o_status=1
GROUP BY o_status";
$rs1=mysqli_query($conn,$querystatus1);
$row1=mysqli_fetch_array($rs1);
$querystatus2 ="SELECT o_status, COUNT(o_id) as s2total
FROM order_head
WHERE o_status=2
GROUP BY o_status";
$rs2=mysqli_query($conn,$querystatus2);
$row2=mysqli_fetch_array($rs2);
$querystatus3 ="SELECT o_status, COUNT(o_id) as s3total
FROM order_head
WHERE o_status=3
GROUP BY o_status";
$rs3=mysqli_query($conn,$querystatus3);
$row3=mysqli_fetch_array($rs3);
$querystatus4 ="SELECT o_status, COUNT(o_id) as s4total
FROM order_head
WHERE o_status=4
GROUP BY o_status";
$rs4=mysqli_query($conn,$querystatus4);
$row4=mysqli_fetch_array($rs4);
?>
<body>
  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php include('menu_l.php');?>
      </div>
      <div class="col-md-10">
        <a href="index.php" class="btn btn-primary">รอชำระเงิน
        <span class="badge badge-light">
          <?php 
        if($row1!=''){
        echo $row1['s1total'];
        }else{
        echo '0';
        } ?></span>
        </a>
        <a href="index.php?act=paid" class="btn btn-success">ชำระเงินแล้ว
        <span class="badge badge-light">
          <?php 
        if($row2!=''){
          echo $row2['s2total'];
          }else{
          echo '0';
          }?></span>
        </a>
        <a href="index.php?act=ems" class="btn btn-warning">แจ้งเลข EMS แล้ว
        <span class="badge badge-light">
          <?php
          if($row3!=''){
          echo $row3['s3total'];
          }else{
          echo '0';
          }?></span>
        </a>
        <a href="index.php?act=cancel" class="btn btn-danger">ยกเลิก
        <span class="badge badge-light">
          <?php         
          if($row4!=''){
          echo $row4['s4total'];
          }else{
          echo '0';
          }?></span>
        </a>
<?php 
$act = (isset($_GET['act']) ? $_GET['act'] : '');

if($act=='paid'){
  include('list_order_paid.php');
}elseif($act=='ems'){
  include('list_order_ems.php');
}elseif($act=='cancel'){
  include('list_order_cancel.php');
}else{
  include('list_order_new.php');
}
?>
    </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>