<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ipa = $_POST['ipa'];
    $sejarah = $_POST['sejarah'];
    $mtk = $_POST['mtk'];
    $bing = $_POST['bing'];
    $bindo = $_POST['bindo'];

    // simpan data ke table nilai
    $query = "INSERT INTO mapel (ipa, sejarah, mtk, bing, bindo) VALUES ('$ipa', '$sejarah', '$mtk', '$bing', '$bindo')";
    if (mysqli_query($conn, $query)){
        header('Location: tabel_nilai.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
