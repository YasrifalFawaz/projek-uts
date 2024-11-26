<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$email = $_POST['email'];

// menginput data ke database
mysqli_query($koneksi,"insert into dosen values('$nip','$nama','$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:dosen.php");
 
?>