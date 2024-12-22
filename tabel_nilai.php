<?php
include 'koneksi.php';

// Query untuk gabungkan data siswa dan mapel
$query = "
    SELECT siswa.id, siswa.nama, siswa.nis, siswa.jenis_kelamin, 
           mapel.ipa, mapel.sejarah, mapel.mtk, mapel.bing, mapel.bindo
    FROM siswa
    LEFT JOIN mapel ON siswa.id = mapel.id
";
$result = mysqli_query($conn, $query);

$siswa = [];
while ($row = mysqli_fetch_assoc($result)) {
    $siswa[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Nilai Siswa</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Jenis Kelamin</th>
                <th>IPA</th>
                <th>Sejarah</th>
                <th>MTK</th>
                <th>Bahasa Inggris</th>
                <th>Bahasa Indonesia</th>
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
                    <td><?= $row['ipa'] ?? '-' ?></td>
                    <td><?= $row['sejarah'] ?? '-' ?></td>
                    <td><?= $row['mtk'] ?? '-' ?></td>
                    <td><?= $row['bing'] ?? '-' ?></td>
                    <td><?= $row['bindo'] ?? '-' ?></td>
                    <td>
                        <a href="edit_nilai.php?id=<?= $row['id'] ?>" class="button edit">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
