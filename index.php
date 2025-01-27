<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Statistics</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Nunito|Poppins" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php
  include 'components/header.php';
  include 'components/side.php';

 include 'components/connection.php';

  // Aggregate queries
  $queryCount = "SELECT COUNT(*) AS total_products FROM product";
  $queryTotalPrice = "SELECT SUM(price * quantity) AS total_value FROM product";
  $queryTotalQuantity = "SELECT SUM(quantity) AS total_quantity FROM product";

  $resultCount = $connection->query($queryCount)->fetch_assoc();
  $resultTotalPrice = $connection->query($queryTotalPrice)->fetch_assoc();
  $resultTotalQuantity = $connection->query($queryTotalQuantity)->fetch_assoc();
  ?>

  <main id="main" class="main">
    <section class="section">
      <div class="row">
        <!-- Total Products Card -->
        <div class="col-xxl-4 col-xl-4">
          <div class="card info-card customers-card">
            <div class="card-body">
              <h5 class="card-title">Total Products</h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-box"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo $resultCount['total_products']; ?></h6>
                  <span class="text-muted small pt-2">Total number of products in inventory</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Total Inventory Value Card -->
        <div class="col-xxl-4 col-xl-4">
          <div class="card info-card customers-card">
            <div class="card-body">
              <h5 class="card-title">Total Inventory Value</h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cash-stack"></i>
                </div>
                <div class="ps-3">
                  <h6>$<?php echo number_format($resultTotalPrice['total_value'], 2); ?></h6>
                  <span class="text-muted small pt-2">Total value of all products</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Total Quantity Card -->
        <div class="col-xxl-4 col-xl-4">
          <div class="card info-card customers-card">
            <div class="card-body">
              <h5 class="card-title">Total Quantity</h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-stack"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo $resultTotalQuantity['total_quantity']; ?></h6>
                  <span class="text-muted small pt-2">Total number of items in stock</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <?php include 'components/footer.php'; ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>
