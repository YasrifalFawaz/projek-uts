<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_praktikum = $_POST['id_praktikum'];
$matkul = $_POST['matkul'];
$jadwal = $_POST['jadwal'];
$nip = $_POST['nip'];
// menginput data ke database
mysqli_query($koneksi,"insert into praktikum values('$id_praktikum','$matkul','$jadwal', '$nip')");
 
// mengalihkan halaman kembali ke index.php
header("location:praktikum.php");
 
?>