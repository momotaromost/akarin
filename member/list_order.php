
<?php 
include ('../condb.php');
$sql = "SELECT *
FROM order_head
WHERE m_id=$m_id
";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ประวัติการสั่งซื้อ</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #e1f5fe; /* Light blue background color */
      color: #333; /* Text color */
    }

    h3 {
      color: #2196F3; /* Blue heading color */
    }

    table {
      background-color: #fff; /* White background for the table */
    }

    th, td {
      text-align: center;
    }

    .btn {
      padding: 5px 10px;
      margin: 2px;
    }

    .btn-blue {
      background-color: #2196F3; /* Blue button color */
      color: #fff; /* White text color */
    }

    .btn-green {
      background-color: #4CAF50; /* Green button color */
      color: #fff; /* White text color */
    }

    .btn-orange {
      background-color: #FF9800; /* Orange button color */
      color: #fff; /* White text color */
    }

    .btn-red {
      background-color: #F44336; /* Red button color */
      color: #fff; /* White text color */
    }
  </style>
</head>

<h3>ประวัติการสั่งซื้อ</h3>
<style>
  table.dataTable {
    background-color: #6c757d;
    color: #fff;
  }

  table.dataTable thead th, table.dataTable thead td {
    border-color: #555;
  }

  table.dataTable tbody td {
    border-color: #777;
  }

  .dataTables_paginate .paginate_button {
    color: #fff;
  }
  
</style>
<table id='example' class='display table table-bordered table-hover' cellspacing='0'> 
    <thead>
        <tr>
            <th width="5%">Order ID</th>
            <th width="10%">Status</th>
            <th width="10%">Order Date & Time</th>
            <th width="10%">Total Price</th>
            <th width="5%">Slip</th>
            <th width="10%">EMS Number</th>
            <th width="5%">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($query as $row) { ?>
        <tr>
        <td class="text-center" style="color: black;"><?php echo $row['o_id'];?></td>

            <td><?php 
                @$st = $row['o_status'];
                $statusColor = '';
                $statusText = '';

                if($st == 1){
                    $statusColor = 'text-primary';
                    $statusText = 'รอชำระเงิน';
                } else if ($st == 2){
                    $statusColor = 'text-success';
                    $statusText = 'ชำระเงินแล้ว';
                } else if ($st == 3){
                    $statusColor = 'text-warning';
                    $statusText = 'ตรวจสอบเลข EMS';
                } else if ($st == 4){
                    $statusColor = 'text-danger';
                    $statusText = 'ยกเลิก';
                }
                echo "<span class='$statusColor'>$statusText</span>";
            ?></td>
            <td style="color: black;"><?php echo $row['o_dttm'];?></td>
            <td style="color: black;"><?php echo number_format($row["o_total"]);?></td>
            <td align="center"><img src="../imgslip/<?php echo $row['o_slip'];?>" alt="Slip" width="100"></td>
            <td style="color: black;"><?php echo $row['o_ems'];?></td>
            <td>
                <?php
                $o_id = $row['o_id'];
                $btnClass = '';
                $btnText = '';

                if($st == 1){
                    $btnClass = 'btn-primary';
                    $btnText = 'ชำระเงิน';
                    $btnLink = "payment.php?o_id=$o_id&do=payment";
                } else if ($st == 2){
                    $btnClass = 'btn-success';
                    $btnText = 'เปิดดู';
                    $btnLink = "payment_detail.php?o_id=$o_id&do=payment_detail";
                } else if ($st == 3){
                    $btnClass = 'btn-warning';
                    $btnText = 'ดูเลข EMS';
                    $btnLink = "payment_detail.php?o_id=$o_id&do=payment_detail";
                } else {
                    $btnClass = 'btn-danger';
                    $btnText = 'เปิดดู';
                    $btnLink = "order_detail.php?o_id=$o_id&do=order_detail";
                }

                echo "<a href='$btnLink' class='btn btn-xs $btnClass'>$btnText</a>";
                ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>