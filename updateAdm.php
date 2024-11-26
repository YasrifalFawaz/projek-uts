<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id    = $_POST['id'];
$nama      = $_POST['nama'];
$password = $_POST['password'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE admin SET id = '$id', nama = '$nama', password = '$password' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: admin.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>