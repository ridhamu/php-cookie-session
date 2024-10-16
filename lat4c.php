<?php 
session_start(); // Memulai sesi

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header(header: "Location: lat4login.php"); // Redirect ke halaman login
    exit();
}

$order_cd = $_COOKIE['order_cd']; 
$order_dvd = $_COOKIE['order_dvd']; 
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
                    Order Summary
                </div>
                <div class="card-body">
                    <h5 class="card-title">jumlah CD: <?php echo $order_cd ?></h5>
                    <h5 class="card-title">jumlah DVD: <?php echo $order_dvd ?></h5>

                    <div class="text-center mt-4">
                        <a href="lat4a.php" class="btn btn-danger w-100">Kembali ke Form</a>
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