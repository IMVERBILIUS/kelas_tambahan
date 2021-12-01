<?php
require '../koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query =mysqli_query($conn, "SELECT * FROM user WHERE username='$username', and password='$password'");

$cek=mysqli_num_rows($query);


?>