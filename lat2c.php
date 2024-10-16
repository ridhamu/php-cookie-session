<?php 
session_start(); 

if(empty($_SESSION["nama"])){
    echo "<h1>belum memasukkan nama😅</h1>"; 
}else {
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        Selamat Datang
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Selamat datang, <?php echo $_SESSION["nama"]; ?>!</h5>
                        <p class="card-text">
                            Anda bisa masuk ke halaman ini karena Anda telah menulis nama.
                        </p>
                        <form id="form1" name="form1" method="post" action="lat2d.php">
                            <button type="submit" name="button" id="button" class="btn btn-danger w-100">Keluar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php } ?>