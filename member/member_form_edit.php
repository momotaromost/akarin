<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Profile</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ced4da; /* Light pink background color */
      color: #333; /* Text color */
    }

    h4 {
      color: #e91e63; /* Pink heading color */
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-control {
      background-color: #fff; /* White background for form controls */
      color: #333; /* Text color for form controls */
    }

    .btn-primary {
      background-color: #e91e63; /* Pink button background color */
      border-color: #e91e63; /* Pink button border color */
    }

    .btn-primary:hover {
      background-color: #c2185b; /* Darker pink on hover */
      border-color: #c2185b;
    }
  </style>
</head>
<h4> Edit Profile </h4>
<form action="member_form_edit_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ระดับ :
    </div>
    <div class="col-sm-2">
      <select name="m_level" class="form-control" disabled>
        <option value="<?php echo $row['m_level'];?>">
          <?php echo $row['m_level'];?>
          </option>
        <?php 
        $ml =  $row['m_level'];
        if($ml=='ADMIN'){
          echo '<option value="MEMBER">MEMBER</option>';
        }else{
          echo '<option value="ADMIN">ADMIN</option>';
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อผู้ใช้ :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_username" required class="form-control" autocomplete="off" value="<?php echo $row['m_username'];?>" disabled>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      คำนำหน้าชื่อ :
    </div>
    <div class="col-sm-2">
      <select name="m_fname" class="form-control" required>
         <option value="<?php echo $row['m_fname'];?>"><?php echo $row['m_fname'];?></option>
         <option value="เด็กชาย">เด็กชาย</option>
        <option value="เด็กหญิง">เด็กหญิง</option>
       
         <option value="นาย">นาย</option>
        <option value="นาง">นาง</option>
        <option value="นางสาว">นางสาว</option> 
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ชื่อ :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_name" required class="form-control" value="<?php echo $row['m_name'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      นามสกุล :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_lname" required class="form-control" value="<?php echo $row['m_lname'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      ที่อยู่ :
    </div>
    <div class="col-sm-6">
      <input type="text" name="m_address" required class="form-control" value="<?php echo $row['m_address'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      อีเมล :
    </div>
    <div class="col-sm-6">
      <input type="email" name="m_email" required class="form-control" value="<?php echo $row['m_email'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      เบอร์โทร :
    </div>
    <div class="col-sm-6">
      <input type="text" name="m_phone" required class="form-control" value="<?php echo $row['m_phone'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 control-label">
      รูปภาพ :
    </div>
    <div class="col-sm-6">
      รูปภาพเก่า <br>
      <img src="../mimg/<?php echo $row['m_img'];?>" width="200px">
      <br>
      เลือกรูปภาพใหม่ <br>
      <input type="file" name="m_img"  class="form-control" accept="image/*">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4">
      <input type="hidden" name="m_img2" value="<?php echo $row['m_img'];?>">
      <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
      <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    </div>
  </div>
</form>