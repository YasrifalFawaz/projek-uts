<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        .card-menu:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .icon-bg {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
        }
        .main-content {
            margin-left: 250px;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 bg-dark sidebar p-3">
            <div class="text-white mb-4">
                <h4>Admin Panel</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white active" href="#">
                        <i class="bi bi-speedometer2 me-2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="mahasiswa.php">
                        <i class="bi bi-people me-2"></i>
                        Mahasiswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="dosen.php">
                        <i class="bi bi-mortarboard me-2"></i>
                        Dosen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="praktikum.php">
                        <i class="bi bi-book me-2"></i>
                        Praktikum
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="admin.php">
                        <i class="bi bi-shield-lock me-2"></i>
                        Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="login.php">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        Halaman Login
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            
            <h1 class="mb-4">Dashboard</h1>

            <div class="row">
                <!-- Mahasiswa Card -->
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="card card-menu">
                        <div class="card-body">
                            <div class="icon-bg bg-primary">
                                <i class="bi bi-people text-white fs-4"></i>
                            </div>
                            <h5 class="card-title">Data Mahasiswa</h5>
                            <p class="card-text text-muted">Kelola data dan informasi mahasiswa</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">
                                    <?php
                                    include 'koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM mahasiswa");
                                    $data = mysqli_fetch_assoc($query);
                                    echo number_format($data['total']) . " Mahasiswa";
                                    ?>
                                </span>
                                <a href="mahasiswa.php" class="btn btn-sm btn-outline-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dosen Card -->
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="card card-menu">
                        <div class="card-body">
                            <div class="icon-bg bg-success">
                                <i class="bi bi-mortarboard text-white fs-4"></i>
                            </div>
                            <h5 class="card-title">Data Dosen</h5>
                            <p class="card-text text-muted">Kelola data dan informasi dosen</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-success">
                                <?php
                                    include 'koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM dosen");
                                    $data = mysqli_fetch_assoc($query);
                                    echo number_format($data['total']) . " Dosen";
                                    ?>
                                </span>
                                <a href="dosen.php" class="btn btn-sm btn-outline-success">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Praktikum Card -->
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="card card-menu">
                        <div class="card-body">
                            <div class="icon-bg bg-warning">
                                <i class="bi bi-book text-white fs-4"></i>
                            </div>
                            <h5 class="card-title">Data Praktikum</h5>
                            <p class="card-text text-muted">Kelola jadwal dan materi praktikum</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-warning">
                                <?php
                                    include 'koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM praktikum");
                                    $data = mysqli_fetch_assoc($query);
                                    echo number_format($data['total']) . " Praktikum";
                                    ?>
                                </span>
                                <a href="praktikum.php" class="btn btn-sm btn-outline-warning">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Admin Card -->
                <div class="col-12 col-sm-6 col-lg-3 mb-4">
                    <div class="card card-menu">
                        <div class="card-body">
                            <div class="icon-bg bg-danger">
                                <i class="bi bi-shield-lock text-white fs-4"></i>
                            </div>
                            <h5 class="card-title">Data Admin</h5>
                            <p class="card-text text-muted">Kelola akun dan hak akses admin</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-danger">
                                <?php
                                    include 'koneksi.php';
                                    $query = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM admin");
                                    $data = mysqli_fetch_assoc($query);
                                    echo number_format($data['total']) . " Admin";
                                    ?>
                                </span>
                                <a href="admin.php" class="btn btn-sm btn-outline-danger">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
        </main>
    </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>