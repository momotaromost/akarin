<?php include('hder.php'); //css ?>
<?php include('../condb.php');
$o_id=$_GET['o_id'];
$sql = "SELECT d.*,p.p_img, p.p_name, p.p_price, h.*
FROM order_detail as d
INNER JOIN order_head as h ON d.o_id=h.o_id
INNER JOIN tbl_prd as p ON d.p_id=p.p_id
WHERE d.o_id=$o_id
AND h.m_id=$m_id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

$bank = "SELECT * FROM tbl_bank";
$querybank = mysqli_query($conn, $bank);


?>
<body>

  <!-- content -->
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <?php include('menu_l.php');?>
      </div>
      <div class="col-md-10">
        <h3 align="center">แจ้งชำระเงิน</h3>
        <h4>
            ออเดอร์ที่ : <?php echo $row['o_id'];?> <br>
            ส่งไปที่ : <?php echo $row['o_name'];?> <br>
            ที่อยู่ : <?php echo $row['o_addr'];?> <br>
            เบอร์โทร : <?php echo $row['o_phone'];?> <br>
            อีเมล : <?php echo $row['o_email'];?> <br>
            วันที่สั่งซื้อ : <?php echo $row['o_dttm'];?> <br>
            สถานะ : <?php @$st = $row['o_status'];

if($st==1){
    echo "<font color='blue'>";
    echo 'รอชำระเงิน';
    echo "</font>";
}else if ($st==2){
    echo "<font color='green'>";
    echo 'ชำระเงินแล้ว';
    echo "</font>";
}else if ($st==3){
    echo "<font color='orange'>";
    echo 'ตรวจสอบเลข EMS';
    echo "</font>";
}else if ($st==4){
    echo "<font color='red'>";
    echo 'ยกเลิก';
    echo "</font>";
}

            ?>
        </h4> 
        <table class="table table-bordered table-hover table-striped">
    <tr>
	<td width="5%" align="center" bgcolor="#EAEAEA"></td>
	<td width="20%" align="center" bgcolor="#EAEAEA">รูปภาพสินค้า</td>
      <td width="35%" align="center" bgcolor="#EAEAEA">ชื่อสินค้า</td>
      <td width="15%" align="center" bgcolor="#EAEAEA">ราคา</td>
      <td width="10%" align="center" bgcolor="#EAEAEA">จำนวน</td>
      <td width="10%" align="center" bgcolor="#EAEAEA">รวม(บาท)</td>
      </tr>
<?php

$total=0;
	
foreach($query as $row)
{		
    $total+=$row["d_subtotal"];
		echo "<tr>";
		echo "<td  align='center'>" . @$i+=1 . "</td>";
		echo "<td  align='center'>"."<img src='../pimg/".$row['p_img']."' width='100'>"."</td>";
		echo "<td  >" . $row["p_name"] . "</td>";
		echo "<td  align='right'>" .number_format($row["p_price"],2) . "</td>";
        echo "<td  align='right'>" .number_format($row["d_qty"],2) . "</td>";
		echo "<td  align='right'>".number_format($row["d_subtotal"],2)."</td>";
		echo "</tr>";
}
	echo "<tr>";
  	echo "<td colspan='5' class='p-3 mb-2 bg-dark text-white' align='center'><b>ราคารวม</b></td>";
  	echo "<td align='right' class='p-3 mb-2 bg-dark text-white'>"."<b>".number_format($total,2)."</b>"."</td>";
	echo "</tr>";
?>
</table>
<h4>เลือกธนาคารที่ชำระเงิน</h4>
<form action="payment_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
<?php
echo '<table class="table table-bordered table-hover table-striped">
    <tr>
	<th width="10%" align="center" bgcolor="#EAEAEA"></th>
	<th width="20%" align="center" bgcolor="#EAEAEA">ชื่อบัญชีธนาคาร</th>
      <th width="30%" align="center" bgcolor="#EAEAEA">เลขที่บัญชี</th>
      <th width="40%" align="center" bgcolor="#EAEAEA">ชื่อเจ้าของบัญชี</th>
      </tr>';

      foreach($querybank as $row)
      {
        $bid=$row['bid'];
        echo "<tr>";
        echo "<td>" ."<input type='radio' name='bid' required value='$bid'>" . "</td>";
        echo "<td>" . $row["bname"] . "</td>";
        echo "<td>" . $row["bnumber"] . "</td>";
        echo "<td>" . $row["bowner"] . "</td>";
        echo "</tr>";
    }
    echo '</table>';
?>
    <div class="form-group">
        <div class="col-md-4">วันที่ชำระเงิน<br>
            <input type="datetime-local" name="o_slip_date" class="form-control" required>
      </div>
      <div class="form-group">
        <div class="col-md-4">จำนวนเงินที่โอน<br>
            <input type="number" name="o_slip_total" any required min="0" class="form-control">
      </div>
      <div class="form-group">
        <div class="col-md-4">อัปโหลดรูปภาพสลิป<br>
            <input type="file" name="o_slip" required min="0" class="form-control" accept="image/*">
      </div>
      <div class="col-md-2">
        <br>
        <input type="hidden" name="o_id" value="<?php echo $o_id;?>">
        <button type="submit" class="btn btn-success">แจ้งชำระเงิน</button>
    </div>
    </div>
    </form>
  </div>
  </div>
  </div>
  <?php include('footer.php'); //footer?>
</body>