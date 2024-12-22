<?php
include 'koneksi.php';

// ambil data siswa
$query = "SELECT * FROM siswa";  
$result = mysqli_query($conn, $query);  // digunakan untuk menjalankan query SQL yang disimpan di variabel $query pada koneksi database $conn, $result nya buat nyimpen data nya
$siswa = []; // array ini digunakan untuk menyimpan semua data dari tabel siswa yang diambil melalui perulangan berikutnya
while ($row = mysqli_fetch_assoc($result)) {  // mengambil satu baris data dari hasil query ($result) dalam bentuk array asosiatif
    $siswa[] = $row;  // sintaks ini menambahkan elemen baru ke array $siswa
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Siswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $row): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['nis'] ?></td>
                    <td><?= $row['jenis_kelamin'] ?></td>
                    <td>
                        <a href="edit_siswa.php?id=<?= $row['id'] ?>" class="button edit">Edit</a>
                        <a href="nilai_siswa.php?id=<?= $row['id'] ?>" class="button input">Input nilai</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
