<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_praktikum    = $_POST['id_praktikum'];
$matkul      = $_POST['matkul'];
$jadwal = $_POST['jadwal'];
$nip = $_POST['nip'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE praktikum SET matkul = '$matkul', jadwal = '$jadwal', nip = '$nip' WHERE id_praktikum = '$id_praktikum'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location:praktikum.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>