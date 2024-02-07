<?php
$query = "SELECT * FROM tbl_prd ORDER BY p_id DESC";
$result = mysqli_query($condb, $query) or die("Error: " . mysqli_error($condb));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>รายการสินค้า</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fce4ec; /* Light pink background color */
      color: #333; /* Text color */
    }

    .container {
      margin-top: 50px;
    }

    h3 {
      color: #e91e63; /* Pink heading color */
    }

    .card {
      border: none;
      border-radius: 10px;
      transition: box-shadow 0.3s;
    }

    .card:hover {
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      height: 200px;
      object-fit: cover;
    }

    .card-title {
      color: #e91e63; /* Pink title color */
      font-size: 1.2rem;
      margin-bottom: 0.75rem;
    }

    .card-text {
      font-size: 0.9rem;
      margin-bottom: 1rem;
    }

    .price {
      font-size: 1rem;
      font-weight: bold;
      color: #e91e63; /* Pink price color */
    }

    .btn-info {
      background-color: #e91e63; /* Pink button background color */
      border-color: #e91e63; /* Pink button border color */
    }

    .btn-info:hover {
      background-color: #c2185b; /* Darker pink on hover */
      border-color: #c2185b;
    }
  </style>
</head>
<body>

<!-- start prd -->
<div class="container">
  <div class="row">
    <div class="col-12 text-center">
      <h3>รายการสินค้า</h3>
    </div>

    <?php while ($row = mysqli_fetch_array($result)) { ?>
      <div class="col-sm-6 col-md-3">
        <div class="card mb-4">
          <img src="pimg/<?php echo $row['p_img']; ?>" alt="<?php echo htmlspecialchars($row['p_name']); ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo htmlspecialchars($row['p_name']); ?>
            </h5>
            <p class="card-text">
              <?php echo htmlspecialchars($row['p_intro']); ?>
            </p>
            <p class="price">
              ราคา <?php echo $row['p_price']; ?> บาท
            </p>
            <a href="detail.php?p_id=<?php echo $row['p_id']; ?>" class="btn btn-info" style="width: 100%;">รายละเอียด</a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- end prd -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
