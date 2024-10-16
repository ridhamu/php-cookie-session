<?php 
session_start(); 

function hitungFaktorial($angka) {
    if($angka < 0){
        return "tidak bisa faktorial negatif"; 
    } elseif ($angka === 0) {
        return 1; 
    } else {
        $faktorial = 1; 
        for($i = 1; $i <= $angka; $i++){
            $faktorial *= $i; // hitung faktorial
        }
        
        return $faktorial; 
    }
}

if(isset($_POST['angka']) && !empty($_POST['angka'])){
    $angka = $_POST['angka']; 
    $faktorial = hitungFaktorial($angka);
    
    
    //simpan dalam array: 

    $data = [
        'angka' => $angka, 
        'faktorial' => $faktorial, 
        'NIM' => '215150707111043', 
        'nama' => 'Muhammad Ridha'
    ]; 

    $_SESSION['data'] = $data; 

    header("location:lat3c.php"); 
}else {
    echo "<h1>input tidak valid</h1>"; 
}


