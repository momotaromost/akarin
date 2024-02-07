<?php
$query = "SELECT t.*, COUNT(p.p_id) as ptotal 
FROM tbl_prd_type as t 
LEFT JOIN tbl_prd as p ON t.t_id=p.ref_t_id
GROUP BY t.t_id" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);
?>
<!--start  menu -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Site</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- Optional: Your custom styles -->
  <style>
    /* Add your custom styles here */
    body {
      padding-top: 56px;
      /* Adjust the body padding based on navbar height */
    }

    .navbar {
      padding: 25px
    }

    .navbar-brand img {
      margin-right: 5px;
    }

    .navbar-nav .nav-link {
      color: #ffffff;
    }

    .navbar-nav .nav-link:hover {
      color: #f8f9fa;
    }

    .navbar-toggler-icon {
      background-color: #ffffff;
    }

    .form-control {
      height: 48px;
      border-radius: 3px;
    }

    .btn-secondary {
      border: none;
      color:#fff;
      height: 48px;
      width: 48px;
    }

    /* Add more styles as needed */
  </style>
</head>

<body>

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a href="index.php" class="navbar-brand" href="#">
          <img src="pimg\logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
          สยามเหล็กไทย
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <?php
              if (!empty($_SESSION['m_name'])) {
                echo '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $_SESSION['m_name'];
                echo '</a><ul class="dropdown-menu">';
                echo '<a class="dropdown-item" href="member/index.php?act=edit">แก้ไขโปรไฟล์</a>';
                echo '<a class="dropdown-item" href="member/index.php">ประวัติการสั่งซื้อ</a>';
                echo '<a class="dropdown-item" href="member/index.php?act=pwd">แก้ไขรหัสผ่าน</a>';
                echo '<a class="dropdown-item" href="logout.php">ออกจากระบบ</a>';
                echo '</a></ul></li>';
              } else {
                echo '<li class="nav-item"><a class="nav-link" href="login.php">เข้าสู่ระบบ</a></li>';
                echo '<li class="nav-item"><a class="nav-link" href="register.php">สมัครสมาชิก</a></li>';
              }
              ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">เลือกประเภทสินค้า</a>
              <ul class="dropdown-menu">
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                  <li>
                    <a class="dropdown-item"
                      href="index.php?act=showbytype&t_id=<?php echo $row["t_id"]; ?>&name=<?php echo $row["t_name"]; ?>">
                      <?php echo $row["t_name"]; ?>
                      (
                      <?php echo $row["ptotal"]; ?>)
                    </a>
                  </li>
                <?php } ?>
              </ul>
            </li>

            <li class="nav-item">
          </ul>
          <form class="form-inline my-2 my-lg-0" method="get" action="index.php">
            <input class="form-control mr-sm-2" type="search" placeholder="ค้นหาชื่อสินค้า" name="search" required>
            <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="act" value="q">
              <!-- ค้นหา -->
            <i class="bi bi-search"></i>
            </button>
          </form>
        </div>
    </nav>
  </div>
  </div>
  </div>
  <!--end  menu -->