<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
      /* Custom Styles for Pink Theme */

      body.pink-theme {
        background-color: #fce4ec; /* Light pink background color */
      }

      .container {
        background-color: #ffffff; /* White container background */
        border-radius: 10px; /* Rounded corners for the container */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle lift effect */
        margin-top: 50px; /* Add some top margin for better spacing */
        text-align: center; /* Center the content horizontally */
        padding: 20px; /* Add padding for better appearance */
        form{
          display:flex;
          flex-direction:column;
          align-items:center;
          justify-content:center;
          width:100%;
        }
      }

      h3 {
        color: #e91e63; /* Pink heading color */
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
  <body class="pink-theme">

    <!-- start form login-->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <img src="pimg\logo.jpg" alt="" width="200" height="200" class="d-inline-block align-text-top">
          <h3> เข้าสู่ระบบ</h3>
          <form action="checklogin.php" method="post" class="form-horizontal">
            <div class="form-group w-100 d-flex flex-column justify-content-center align-items-center">
              <div class="col-sm-3 control-label">
                ชื่อผู้ใช้ : 
              </div>
              <div class="col-sm-4">
                <input type="text" name="m_username" required class="form-control">
              </div>
            </div>
            <div class="form-group w-100 d-flex flex-column justify-content-center align-items-center">
              <div class="col-sm-3 control-label">
                รหัสผ่าน : 
              </div>
              <div class="col-sm-4">
                <input type="password" name="m_password" required class="form-control">
              </div>
            </div>
            <div class="form-group w-100 d-flex flex-column justify-content-center align-items-center">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end form-->

    <!-- start footer -->

    <!-- end footer -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
