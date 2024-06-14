<?php
$db_host = 'localhost';
$db_user = 'root';
$db_name = 'db_usk';

$conn = mysqli_connect('localhost', 'root','','db_usk');
if (!$conn) {
die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT *
FROM komentar';

$query = mysqli_query($conn, $sql);
if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
?>