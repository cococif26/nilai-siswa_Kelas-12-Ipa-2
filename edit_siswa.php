<?php
include 'koneksi.php';

$id = $_GET['id'];

// ambil data siswa brdsrkan id
$query = "SELECT * FROM siswa WHERE id = $id";
$result = mysqli_query($conn, $query);
$siswa = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <form action="proses_edit_siswa.php" method="POST">
        <input type="hidden" name="id" value="<?= $siswa['id'] ?>">
        <label for="nama">Nama Siswa :</label>
        <input type="text" id="nama" name="nama" value="<?= $siswa['nama'] ?>" required>
        <br>
        <label for="nis">NIS :</label>
        <input type="text" id="nis" name="nis" value="<?= $siswa['nis'] ?>" required>
        <br>
        <label for="jenis_kelamin">Jenis Kelamin :</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Laki-laki" <?= $siswa['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="Perempuan" <?= $siswa['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
