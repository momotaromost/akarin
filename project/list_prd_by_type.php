<?php
$t_id = $_GET['t_id'];
$query = "SELECT * FROM tbl_prd WHERE ref_t_id=$t_id ORDER BY  p_id DESC"
or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);
//echo $query;
?>
<!-- start prd -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3>รายการสินค้า</h3>
    </div>
    <?php while($row = mysqli_fetch_array($result)) { ?>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <img src="pimg/<?php echo $row['p_img'];?>" width="100%">
          <div class="caption">
            <h5>
              <?php echo $row['p_name'];?>
              ราคา <?php echo $row['p_price'];?> บาท
            </h5>
            <p>
              <?php echo $row['p_intro'];?>
            </p>
            <p>
              <a href="detail.php?p_id=<?php echo $row['p_id'];?>" class="btn btn-info" role="button" style="width: 100%;">รายละเอียด</a> 
            </p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- end prd -->