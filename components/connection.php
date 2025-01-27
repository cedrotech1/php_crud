<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "garage";

$connection=mysqli_connect($servername, $username, $password, $dbname);


if(mysqli_connect_errno()){echo "". mysqli_connect_error();
}else{  
    // echo "connected success fully". mysqli_connect_error();
};
?>