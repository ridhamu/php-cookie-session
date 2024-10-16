<?php
session_start(); // Memulai sesi

// Mengambil data dari sesi
$data = isset($_SESSION['data']) ? $_SESSION['data'] : null;

// Menghapus seluruh variabel sesi
if ($data) {
    // Menampilkan data dari sesi
    $angka = $data['angka'];
    $faktorial = $data['faktorial'];
    $nim = $data['NIM'];
    $nama = $data['nama'];

    // Menghapus data dari sesi
    session_unset(); // Menghapus semua variabel sesi
    // session_destroy(); // Opsional, jika ingin menghancurkan sesi sepenuhnya
} else {
    echo "<h1>Tidak ada data yang tersedia.</h1>";
    exit; // Keluar jika tidak ada data
}
?>

<!DOCTYPE html>
<html lang="en">`
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Faktorial</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Hasil Faktorial
                </div>
                <div class="card-body">
                    <h5 class="card-title">Hasil</h5>
                    <p>Angka: <?php echo $angka; ?></p>
                    <p>Faktorial: <?php echo $faktorial; ?></p>
                    <p>NIM: <?php echo $nim; ?></p>
                    <p>Nama: <?php echo $nama; ?></p>

                    <div class="text-center mt-4">
                        <a href="lat3a.php" class="btn btn-danger w-100">Kembali ke Form</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (optional for certain components like dropdowns) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
