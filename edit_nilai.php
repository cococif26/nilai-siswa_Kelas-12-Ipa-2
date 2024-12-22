<?php
include 'koneksi.php';

$id = $_GET['id'];

// Ambil data nilai berdasarkan id_siswa dari tabel `mapel`
$query = "
    SELECT mapel.id, mapel.ipa, mapel.sejarah, mapel.mtk, mapel.bing, mapel.bindo
    FROM mapel
    WHERE mapel.id = $id
";
$result = mysqli_query($conn, $query);
$nilai = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Nilai Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Data Nilai Siswa</h1>
    <form action="proses_edit_nilai.php" method="POST">
        <input type="hidden" name="id" value="<?= $nilai['id'] ?>">

        <label for="ipa">IPA:</label>
        <input type="number" id="ipa" name="ipa" value="<?= $nilai['ipa'] ?>" required>
        <br>

        <label for="sejarah">Sejarah:</label>
        <input type="number" id="sejarah" name="sejarah" value="<?= $nilai['sejarah'] ?>" required>
        <br>

        <label for="mtk">Matematika:</label>
        <input type="number" id="mtk" name="mtk" value="<?= $nilai['mtk'] ?>" required>
        <br>

        <label for="bing">Bahasa Inggris:</label>
        <input type="number" id="bing" name="bing" value="<?= $nilai['bing'] ?>" required>
        <br>

        <label for="bindo">Bahasa Indonesia:</label>
        <input type="number" id="bindo" name="bindo" value="<?= $nilai['bindo'] ?>" required>
        <br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
