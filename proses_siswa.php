<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // simpan data ke table siswa
    $query = "INSERT INTO siswa (nama, nis, jenis_kelamin) VALUES ('$nama', '$nis', '$jenis_kelamin')";
    if (mysqli_query($conn, $query)) {
        header('Location: tabel_siswa.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
