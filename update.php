<?php
include 'components/connection.php';

$id=$_GET['id'];

echo''.$id.'';


$sql = "select * from product  WHERE id='$id'";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_array($result)) {
  

$name=$row['name'];
$quantity=$row['quantity'];
$description=$row['description'];
$price=$row['price'];
$category=$row['category'];

echo''.$name.''.$quantity.''.$description;
 

}



$submit=@$_POST['edit'];
if(isset($submit)){

  $name=$_POST['name'];
  $quantity=$_POST['quantity'];
  $price=$_POST['price'];
  $description=$_POST['description'];
  $category=$_POST['category'];
  $idn=$_POST['idn'];

  // echo ''.$name.''.$quantity.''.$description.''.$category.''.$submit.'';
  // step 3 insert data into database
  $sql="UPDATE product SET name='$name',quantity='$quantity',description='$description',category='$category',price='$price' WHERE id='$idn'";
  $result=mysqli_query($connection,$sql);
  if($result==true){
    echo"<script>alert('updated  successfully')</script>";
    echo "<script>window.location.href = 'viewproduct.php';</script>";

  }else{
    echo 'data not inserted';
  }

}





?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>add product</title>
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
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add product</h5>

            <!-- Advanced Form Elements -->
            <form action="update.php" method="post">

              <div class="row mb-3">

                <div class="col-sm-12">
                <input type="name" class="form-control" id="floatingInput" value="<?php echo $id  ?>" hidden name="idn">
                  <div class="form-floating mb-3">
                    <input type="name" class="form-control" id="floatingInput" value="<?php echo $name  ?>" name="name">
                    <label for="floatingInput">Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingPassword" value="<?php echo $quantity  ?>" name="quantity">
                    <label for="floatingPassword">quantity</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="" value="<?php echo $price  ?>" name="price">
                    <label for="floatingPassword">price</label>
                  </div>
                  <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                      style="height: 100px;" name="description">
                        <?php echo $description  ?>
                    
                    </textarea>
                    <label for="floatingTextarea">description</label>
                  </div>
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" name="category" aria-label="Floating label select example">
                      <option disabled>Open this select menu</option>
                      <option value="machines">machines</option>
                      <option value="food">food</option>
                      <option value="funiture">funiture</option>
                    </select>
                    <label for="floatingSelect">product category: was : <?php echo $category  ?></label>
                  </div>
                </div>
                <div class="col-sm-10">
                  <button type="submit" name="edit" class="btn btn-info">save changes</button>
                </div>
              </div>



            </form><!-- End General Form Elements -->

          </div>
        </div>

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