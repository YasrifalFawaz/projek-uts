<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nrp    = $_POST['nrp'];
$nama      = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp   = $_POST['no_telp'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE mahasiswa SET nrp = '$nrp', nama = '$nama', alamat = '$alamat', no_telp = '$no_telp' WHERE nrp = '$nrp'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: mahasiswa.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>