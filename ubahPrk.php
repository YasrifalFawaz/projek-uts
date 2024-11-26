<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Praktikum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 40px;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            margin: auto;
        }
        h2, h3 {
            text-align: center;
            color: #007bff;
        }
        .btn-back {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Heading -->
        <h2>Update Data</h2>
        <a href="praktikum.php" class="btn btn-outline-secondary btn-back">Kembali</a>
        <h3>Data Praktikum</h3>
        <br/>

        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from praktikum where id_praktikum='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <!-- Form to Update Data -->
            <form method="post" action="updatePrk.php">
                <div class="mb-3">
                    <label for="id_praktikum" class="form-label">ID</label>
                    <input type="hidden" name="id_praktikum" value="<?php echo $d['id_praktikum']; ?>">
                    <input type="text" class="form-control" id="id_praktikum" name="id_praktikum" value="<?php echo $d['id_praktikum']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="matkul" class="form-label">Matakuliah</label>
                    <input type="text" class="form-control" id="matkul" name="matkul" value="<?php echo $d['matkul']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="jadwal" class="form-label">Jadwal</label>
                    <input type="date" class="form-control" id="jadwal" name="jadwal" value="<?php echo $d['jadwal']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">Nip</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $d['nip']; ?>" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        <?php
        }
        ?>
    </div>

    <!-- Bootstrap JS (Optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2zKgRb5tP7k2kF05xBW8y6O2y8h5Ic6k9wghZTl5OWfUj/+4SkW2Vo5tmPO" crossorigin="anonymous"></script>
</body>
</html>
