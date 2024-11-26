<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Praktikum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 50px;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            margin: auto;
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Button to View Data -->
        <form method="POST" action="praktikum.php" class="mb-4">
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary">Tampilkan Data Praktikum</button>
            </div>
        </form>

        <!-- Header -->
        <h3>Tambah Data Praktikum</h3>

        <!-- Form to Add Data -->
        <form method="post" action="inputPrk.php">
            <div class="mb-3">
                <label for="id_praktikum" class="form-label">ID</label>
                <input type="text" class="form-control" id="id_praktikum" name="id_praktikum" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Matakuliah</label>
                <input type="text" class="form-control" id="matkul" name="matkul" required>
            </div>
            <div class="mb-3">
                <label for="jadwal" class="form-label">Jadwal</label>
                <input type="date" class="form-control" id="jadwal" name="jadwal" required>
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">Nip</label>
                <input type="text" class="form-control" id="nip" name="nip" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (Optional for interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2zKgRb5tP7k2kF05xBW8y6O2y8h5Ic6k9wghZTl5OWfUj/+4SkW2Vo5tmPO" crossorigin="anonymous"></script>
</body>
</html>
