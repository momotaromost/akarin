<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Add your custom styles here if needed -->
  <style>
    body {
      background-color: #f2f2f2; /* Light Gray */
    }
    .form-container {
      max-width: 400px;
      margin: auto;
      margin-top: 50px;
      padding: 20px;
      border: 1px solid #999; /* Darker Gray */
      border-radius: 10px;
      background-color: #ffffff; /* White */
    }
    .btn-primary {
      background-color: #666666; /* Gray */
      border-color: #666666; /* Gray */
    }
    .btn-primary:hover {
      background-color: #333333; /* Darker Gray on Hover */
      border-color: #333333; /* Darker Gray on Hover */
    }
  </style>
</head>
<body>

<div class="container form-container">
  <h4 class="mb-4">Reset Password</h4>
  <form action="member_form_rwd_db.php" method="post">
    <div class="form-group row">
      <label for="m_username" class="col-sm-4 col-form-label">ชื่อผู้ใช้:</label>
      <div class="col-sm-8">
        <input type="text" name="m_username" required class="form-control" autocomplete="off" value="<?php echo $row['m_username'];?>" disabled>
      </div>
    </div>
    <div class="form-group row">
      <label for="m_password1" class="col-sm-4 col-form-label">รหัสผ่านใหม่:</label>
      <div class="col-sm-8">
        <input type="password" name="m_password1" required class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="m_password2" class="col-sm-4 col-form-label">ยืนยันรหัสผ่าน:</label>
      <div class="col-sm-8">
        <input type="password" name="m_password2" required class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-8 offset-sm-4">
        <input type="hidden" name="m_id" value="<?php echo $row['m_id'];?>">
        <button type="submit" class="btn btn-primary">รีเซ็ตรหัสผ่าน</button>
      </div>
    </div>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
