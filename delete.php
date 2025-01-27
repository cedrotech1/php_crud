<?php
include 'components/connection.php';
$id=$_GET['id'];

// echo''.$id.'';
$sql = "DELETE FROM product WHERE id='$id'";
$result = mysqli_query($connection, $sql);
if($result){
    // echo"<script>window.location.href('viewproduct.php')</script>";
    echo "<script>window.location.href = 'viewproduct.php';</script>";

}
?>