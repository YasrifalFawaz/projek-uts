<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('$nrp','$nama','$alamat', '$no_telp')");
 
// mengalihkan halaman kembali ke index.php
header("location:mahasiswa.php");
 
?>