<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nip    = $_POST['nip'];
$nama      = $_POST['nama'];
$email = $_POST['email'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE dosen SET nip = '$nip', nama = '$nama', email = '$email' WHERE nip = '$nip'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: dosen.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>