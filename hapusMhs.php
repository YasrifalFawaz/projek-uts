<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['nrp'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from mahasiswa WHERE nrp='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:mahasiswa.php");
 
?>