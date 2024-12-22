<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $ipa = $_POST['ipa'];
    $sejarah = $_POST['sejarah'];
    $mtk = $_POST['mtk'];
    $bing = $_POST['bing'];
    $bindo = $_POST['bindo'];

    // Update data nilai di tabel `mapel`
    $query = "
        UPDATE mapel 
        SET ipa = '$ipa', sejarah = '$sejarah', mtk = '$mtk', bing = '$bing', bindo = '$bindo'
        WHERE id = $id
    ";

    if (mysqli_query($conn, $query)) {
        header('Location: tabel_nilai.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
