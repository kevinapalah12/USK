<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$conn = mysqli_connect('localhost', 'root', '','db_usk');{

// get the post records
date_default_timezone_set("Asia/Jakarta");
$timestamp = time();
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];
$Tanggal = date('Y-m-d H:i:s', $timestamp);

// database insert SQL code
$sql = "INSERT INTO `komentar` (`id`,`nama`, `email`, `komentar`,`Tanggal`) VALUES ('$id','$nama', '$email', '$komentar','$Tanggal')";

// insert in database 
$rs = mysqli_query($conn, $sql);
echo "<script>alert('berhasil');window.location.href='index.php';</script>";
}
?>