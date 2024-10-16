<?php
session_start(); // Memulai sesi

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: lat4login.php"); // Redirect ke halaman login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Order
                </div>
                <div class="card-body">
                    <form id="form1" name="form1" method="post" action="lat4b.php">
                        <div class="mb-3">
                            <label for="CD" class="form-label">Jumlah CD:</label>
                            <input type="number" class="form-control" name="CD" id="CD" placeholder="Jumlah CD" 
                                   value="<?php echo isset($_COOKIE['order_cd']) ? $_COOKIE['order_cd'] : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="DVD" class="form-label">Jumlah DVD:</label>
                            <input type="number" class="form-control" name="DVD" id="DVD" placeholder="Jumlah DVD" 
                                   value="<?php echo isset($_COOKIE['order_dvd']) ? $_COOKIE['order_dvd'] : ''; ?>">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="button" id="button" class="btn btn-primary w-100">Order</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="lat4logout.php" class="btn btn-danger w-100">Logout</a> <!-- Tombol logout -->
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
