<?php 
include ('../condb.php');
$sql = "SELECT *
FROM order_head
WHERE o_status=3
";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<h3>รายการแจ้ง EMS แล้ว</h3>
<table table id='example' class='display table table-bordered table-hover' cellspacing='0'> 
    <thead>
        <tr>
            <th width="5%"></th>
            <th width="50%">ชื่อลูกค้า</th>
            <th width="10%">วันที่-เวลาสั่งซื้อ</th>
            <th width="10%">ราคารวม</th>
            <th width="10%">สลิป</th>
            <th width="5%">วิว</th>
        </tr>
    </thead>
<tbody>
    <?php foreach($query as $row){ ?>
    <tr>
        <td align="center"><?php echo $row['o_id'];?></td>
        <td>
        <?php

        echo $row['o_name'];
        echo '<br>';
        echo 'ที่อยู่ : '.$row['o_addr'];
        echo '<br>';
        echo 'เบอร์โทร : '.$row['o_phone'];
        echo '<br>';
        echo 'อีเมล : '.$row['o_email'];
        echo '<br>';
        
        
        ?></td>
        <td><?php echo $row['o_dttm'];?></td>
        <td align="right"><?php echo number_format($row["o_total"],2);?></td>
        <td>
        <a href="../imgslip/<?php echo $row['o_slip'];?>" target="blank">
       <img src="../imgslip/<?php echo $row['o_slip'];?>" width="100%">
    </a>
    </td>

        <td>
            <?php

        $o_id=$row['o_id'];
            echo "<a href='ems_detail.php?o_id=$o_id&do=ems_detail' class='btn btn-warning' btn-xs' target='blank'>เปิดดู</a>";
        
        ?>
        </td>
</tr>
<?php } ?>
</tbody>
</table>