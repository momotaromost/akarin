<title>ประวัติการเข้าสู่ระบบของผู้ใช้</title>
<?php include('hder.php'); //css ?>
<body>
 
  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php include('menu_l.php');?>
      </div>
      <div class="col-md-10">
        
 

          <a href="login.php?act=byuser" class="btn btn-info">ผู้ใช้</a> 
          <a href="login.php?act=byd" class="btn btn-outline-secondary">รายวัน</a> 
          <a href="login.php?act=bym" class="btn btn-outline-secondary">รายเดือน</a> 
          <a href="login.php?act=byyear" class="btn btn-outline-secondary">รายปี</a> 
          <a href="login.php?act=bydate" class="btn btn-primary">ดูตามวัน</a> 
     

        <?php 
        $act = (isset($_GET['act']) ? $_GET['act'] : '');
      if ($act=='byuser') {
         include('login_list_by_user.php');
      }elseif ($act=='byd') {
        include('login_list_by_daily.php');
     }elseif ($act=='bym') {
         include('login_list_by_monthly.php');
      }elseif ($act=='byyear') {
         include('login_list_by_yearly.php');
      }elseif ($act=='bydate') {
         include('login_list_by_search.php');
      }else{
          include('login_list.php');
      }
        ?>
      </div>
    </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>