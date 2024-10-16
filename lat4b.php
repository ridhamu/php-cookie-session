<?php
session_start(); // Memulai sesi

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: lat4login.php"); // Redirect ke halaman login
    exit();
}

if(isset($_POST['CD']) && isset($_POST['DVD'])){
    setcookie('order_cd', $_POST['CD']); 
    setcookie('order_dvd', $_POST['DVD']); 

    header("location:lat4c.php"); 
}