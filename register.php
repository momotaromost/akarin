<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff; /* Alice Blue */
            color: #333; /* Dark Gray */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h3 {
            color: #000080; /* Navy Blue */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border: 2px solid #000080; /* Navy Blue */
            border-radius: 5px;
            box-shadow: none;
        }

        .form-control:focus {
            border-color: #00004d; /* Darker Navy Blue */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #000080; /* Navy Blue */
            border-color: #000080; /* Navy Blue */
            border-radius: 5px;
            padding: 10px 20px;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #00004d; /* Darker Navy Blue */
            border-color: #00004d; /* Darker Navy Blue */
        }
    </style>
</head>
<body>
    <!-- Your existing HTML content here -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

  <body>
  
        <!-- start form login-->
        <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
              <h3>Register</h3>
              <form action="register_db.php" method="post" class="form-horizontal">
    <div class="form-group">
    <div class="col-sm-3 control-label">
      ระดับผู้ใช้ :
    </div>
    <div class="col-sm-4">
      <input type="text" name="m_level" value="MEMBER" class="form-control" readonly>
      </div>
</div>
                 <div class="form-group">
                  <div class="col-sm-3 control-label">
                    ชื่อผู้ใช้ : 
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="m_username" required class="form-control">
                  </div>
                 </div>
                 <div class="form-group">
                  <div class="col-sm-3 control-label">
                    รหัสผ่าน : 
                  </div>
                  <div class="col-sm-4">
                    <input type="password" name="m_password" required class="form-control">
                  </div>
                 </div>
                 <div class="form-group">
                  <div class="col-sm-3 control-label">
      คำนำหน้าชื่อ :
    </div>
    <div class="col-sm-3">
      <select name="m_fname" class="form-control" required>
      <option value=""></option>
         <option value="เด็กชาย">เด็กชาย</option>
        <option value="เด็กหญิง">เด็กหญิง</option>
         <option value="นาย">นาย</option>
        <option value="นาง">นาง</option>
        <option value="นางสาว">นางสาว</option> 
      </select>
    </div>
  </div>
                 <div class="form-group">
                  <div class="col-sm-3 control-label">
                    ชื่อ : 
                  </div>
                  <div class="col-sm-7">
                    <input type="text" name="m_name" required class="form-control">
                  </div>
                 </div>
                 <div class="form-group">
                  <div class="col-sm-3 control-label">
                    นามสกุล : 
                  </div>
                  <div class="col-sm-7">
                    <input type="text" name="m_lname" required class="form-control">
                  </div>
                 </div>
                 <div class="form-group">
                  <div class="col-sm-3 control-label">
                    Email : 
                  </div>
                  <div class="col-sm-6">
                    <input type="email" name="m_email" required class="form-control">
                  </div>
                 </div>
                 <div class="form-group">
                  <div class="col-sm-3 control-label">
                    เบอร์โทรศัพท์ : 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="m_phone" required class="form-control">
                  </div>
                 </div>
                 <div class="form-group">
                  <div class="col-sm-3">
                  </div>
                  <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                  </div>
                 </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end form-->

        <!-- start footer -->

        <!-- end footer -->
        
      </body>
    </html>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>