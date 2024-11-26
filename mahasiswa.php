<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .btn-custom {
            border-radius: 50px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">Kembali ke Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dosen.php">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="praktikum.php">Praktikum</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h2 class="text-center my-4">Data Mahasiswa</h2>
        <form method="POST" action="tambahMhs.php">
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary btn-custom">Tambah Data</button>
            </div>
            <hr>
        </form>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nrp</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telpon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "select * from mahasiswa");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nrp']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td><?php echo $d['no_telp']; ?></td>
                    <td>
                        <a class="btn btn-info btn-sm" href="ubahMhs.php?nrp=<?php echo $d['nrp']; ?>">Ubah</a>
                        <a class="btn btn-danger btn-sm" href="hapusMhs.php?nrp=<?php echo $d['nrp']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2zKgRb5tP7k2kF05xBW8y6O2y8h5Ic6k9wghZTl5OWfUj/+4SkW2Vo5tmPO" crossorigin="anonymous"></script>
</body>
</html>
