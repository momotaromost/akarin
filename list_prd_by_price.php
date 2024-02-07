<?php
$ps = $_GET['ps'];
$pe = $_GET['pe'];
$query = "SELECT * FROM tbl_prd 
WHERE `p_price` 
BETWEEN $ps AND $pe 
ORDER BY p_id DESC"
or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);
//echo $query;
?>
<!-- start prd -->
<!-- start prd -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">
    <br>
      <h3>รายการสินค้าทั้งหมด</h3>
    </div>
    <?php while($row = mysqli_fetch_array($result)) { ?>
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <img src="pimg/<?php echo $row['p_img'];?>" style="width:100%; height:300px; object-fit:contain">
          <div class="caption">
            <br>
          <h5 class="font-weight-normal" style="  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  overflow: hidden;
text-overflow: ellipsis;
height:50px;"><font color="black">
              <?php echo $row['p_name'];?>
              </font>
              </h5>
        <h5>
        <font color="black">
			<?php echo 'เหลืออยู่ ' .$row['p_qty'];?> ชิ้น
			</font>
      <br>
        <font color="red">
			ราคา <?php echo number_format($row['p_price'],2);?> บาท
			</font>
            </h5>
            <p>
              <a href="detail.php?p_id=<?php echo $row['p_id'];?>&act=add" class="btn btn-primary btn-lg btn-block">รายละเอียดสินค้า</a>
              <?php if($row['p_qty']>0){ ?>
              <a href="cart.php?p_id=<?php echo $row['p_id'];?>&act=add" class="btn btn-success btn-lg btn-block">หยิบใส่ตะกร้าสินค้า</a>
            <?php }else{
              echo '<button class="btn btn-danger btn-lg btn-block" disabled>สินค้าหมด!!</button>';
            }?>

            </p>
          </div>
        </div>

      </div>
    <?php } ?>
  </div>
  
</div>
<!-- end prd -->