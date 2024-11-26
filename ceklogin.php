<?php 
    session_start();
    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $id = $_POST['id'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM admin WHERE id='$id' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['id'] = $id;
        $_SESSION['status'] = "login";
        echo "<script> alert ('login berhasil ! ');</script>";
        header("location:dashboard.php");
    }
    else{
        
        echo "<script> alert ('login gagal ! username dan password tidak benar ');</script>";
        echo "<script> window.location ='login.php';</script>";
    }
?>