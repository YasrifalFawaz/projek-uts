<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['nip'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from dosen WHERE nip='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:dosen.php");
 
?>