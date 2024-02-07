<?php
$query = "SELECT * FROM tbl_prd ORDER BY  p_id DESC"
  or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);

//echo $query;
?>
<style>
  .part-1::before {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    background-color: #7777770f;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    transform: scaleX(0);
    transition: all 500ms ease;
    z-index: 1;
  }

  .product-1:hover .part-1:before {
    transform: scaleX(1);
  }

  .product-1:hover .part-1 {
    transform: scale(1.2);
  }

  .box-1 {
    overflow: hidden;
    height: 290px;
    max-height: 290px;
    margin-bottom: 20px;
    position: relative;
  }

  .part-1:hover {
    transform: scale(1.2);
    transition: all 500ms ease-in-out;
  }

  .product-1 {
    margin-bottom: 26px;
  }

  .product-1 .part-1 {
    /* position: relative; */
    height: 290px;
    max-height: 290px;
    margin-bottom: 20px;
    overflow: hidden;
    background-size: cover;
    background-position-x: center;
    background-position-y: center;
    cursor: pointer;
    transition: all 500ms ease-in-out;
  }

  .box-1 .type-product,
  .part-1 .new {
    position: absolute;
    bottom: 15px;
    left: 20px;
    color: #ffffff;
    background-color: #E78F1F;
    padding: 3px 8px;
    text-transform: uppercase;
    font-size: 0.9rem;
  }

  .part-2 .product-title {
    font-size: 1.3rem;
    color: #325B8F;
  }

  .part-2 .product-title span:hover {
    text-decoration: underline;
    cursor: pointer;
  }

  .part-2 .product-amount {
    color: #808080;
    font-size: 0.8rem;
  }

  .part-2 h4 {
    display: inline-block;
    font-size: 1rem;
    color: #E78F1F;
  }
</style>
<!-- start prd -->
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <br>
      <h3>รายการสินค้าทั้งหมด</h3>
    </div>
    <?php while ($row = mysqli_fetch_array($result)) { ?>
      <div class="col-sm-6 col-md-3">
        <!-- <div class="thumbnail">
          <img src="pimg/<?php echo $row['p_img']; ?>" style="width:100%; height:300px; object-fit:contain">
          <div class="caption">
            <br>
            <h5 class="font-weight-normal" style="  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 2;
  overflow: hidden;
text-overflow: ellipsis;
height:50px;">
              <font color="black">
                <?php echo $row['p_name']; ?>
              </font>
            </h5>
            <h5>
              <font color="black">
                <?php echo 'เหลืออยู่ ' . $row['p_qty']; ?> ชิ้น
              </font>
              <br>
              <font color="red">
                ราคา
                <?php echo number_format($row['p_price'], 2); ?> บาท
              </font>
            </h5>
            <p>
              <a href="detail.php?p_id=<?php echo $row['p_id']; ?>&act=add"
                class="btn btn-primary btn-lg btn-block">รายละเอียดสินค้า</a>
              <?php if ($row['p_qty'] > 0) { ?>
                <a href="cart.php?p_id=<?php echo $row['p_id']; ?>&act=add"
                  class="btn btn-success btn-lg btn-block">หยิบใส่ตะกร้าสินค้า</a>
              <?php } else {
                echo '<button class="btn btn-danger btn-lg btn-block" disabled>สินค้าหมด!!</button>';
              } ?>

            </p>
          </div>
        </div> -->

        <div class="product-1">
          <div class="box-1">
            <a href="detail.php?p_id=<?php echo $row['p_id']; ?>&act=add">
              <div class="part-1" style="background-image:url('pimg/<?php echo $row['p_img']; ?>')"></div>
              <!-- <div class="type-product">Lorem.</div> -->
          </div>
          </a>
          <div class="part-2">
            <h6 class="product-amount">
              <?php echo $row['p_qty']; ?> ชิ้น
            </h6>
            <h2 class="product-title">
              <?php echo $row['p_name']; ?>
            </h2>
            <h6 class="product-price">
              <?php echo $row['p_price']; ?> บาท
            </h6>
            <a href="cart.php?p_id=<?php echo $row['p_id'];?>&act=add" class="btn btn-success">หยิบใส่ตะกร้าสินค้า</a>
          </div>
        </div>

      </div>
    <?php } ?>
  </div>

</div>
<!-- end prd -->