<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$password = $_POST['password'];

// menginput data ke database
mysqli_query($koneksi,"insert into admin values('$id','$nama','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>