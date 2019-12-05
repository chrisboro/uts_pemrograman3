<?php
include 'koneksiuts.php';
$NIK = $_POST['a'];
$nama = $_POST['b'];
$jbt = $_POST['c'];
$dpt = $_POST['d'];
$sc = $_POST['e'];

mysqli_query($b,"INSERT INTO cuti VALUES('$NIK','$nama','$jbt','$dpt','$sc')"); 
header("location:tampiluts.php?pesan=input");
?>