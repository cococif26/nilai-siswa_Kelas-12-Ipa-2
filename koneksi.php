<?php
// konfigurasi database
$host = "localhost";
$user = "root";    
$password = ""; 
$database ="data_siswa";  

// koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);

// cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>