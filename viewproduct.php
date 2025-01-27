<?php
// step 1 database connection  
include 'components/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>view</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>


  <?php
  include 'components/header.php';

  include 'components/side.php';
  ?>





  <main id="main" class="main">


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">List of products</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th>quantity.</th>
                    <th>description</th>
                    <th>price</th>
                    <th>category</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>


                  <?php
                  $sql = 'select * from product';
                  $result = mysqli_query($connection, $sql);
                  while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['quantity']; ?></td>
                      <td><?php echo $row['description']; ?></td>
                      <td><?php echo $row['price']; ?></td>
                      <td><?php echo $row['category']; ?></td>
                      <td>
                        <a href="delete.php?id=<?php echo $row['id']; ?>">
                          <button class="btn btn-danger">delete</button>
                   
                        </a>

                        <a href="update.php?id=<?php echo $row['id']; ?>">
                          <button class="btn btn-info">edit</button>
                   
                        </a>
                      </td>

                    </tr>


                    <?php
                  }
                  ?>


                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <section>

      <div class="row">
    



        <?php
        $number=0;
        $sql = 'select * from product';
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_array($result)) {
          $number++;

          ?>

          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">product no:<?php echo $number; ?></h5>
                <h4>name:<?php echo $row['name']; ?></h4>
                <h4>quantity: <?php echo $row['quantity']; ?></h4>
                <h4>description:<?php echo $row['description']; ?></h4>
                <h4>price: <?php echo $row['price']; ?></h4>
                <h4>category:<?php echo $row['category']; ?></h4>
                <a href="delete.php?id=<?php echo $row['id']; ?>">
                          <button class="btn btn-danger">delete</button>
                   
                        </a>
                        <a href="update.php?id=<?php echo $row['id']; ?>">
                          <button class="btn btn-info">edit</button>
                   
                        </a>
              </div>
              
            </div><!-- End Default Card -->


          </div>


          <?php
        }
        ?>



      </div>



    </section>

  </main><!-- End #main -->

  <?php
  include 'components/footer.php';
  ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>