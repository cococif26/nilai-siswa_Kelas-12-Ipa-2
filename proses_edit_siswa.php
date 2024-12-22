<?php
include 'koneksi.php';

// validasi input
if (isset($_POST['id'], $_POST['nama'], $_POST['nis'], $_POST['jenis_kelamin'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // query buat update data siswa
    $query = "UPDATE siswa SET nama = '$nama', nis = '$nis', jenis_kelamin = '$jenis_kelamin' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header('Location: tabel_siswa.php'); // redirect ke tabel siswa stlh update
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Data tidak lengkap. Pastikan semua input terisi.";
}
?>
