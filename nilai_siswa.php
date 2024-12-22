<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Nilai Siswa</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Input Nilai Siswa Kelas XI IPA 2</h1>
    <form method="POST" action="proses_nilai.php">
      <label>IPA :</label>
      <input type="text" name="ipa" required /><br />
      <label>Sejarah :</label>
      <input type="text" name="sejarah" required /><br />
      <label>Matematika :</label>
      <input type="text" name="mtk" required /><br />
      <label>B. Inggris :</label>
      <input type="text" name="bing" required /><br />
      <label>B. Indonesia :</label>
      <input type="text" name="bindo" required /><br />
      <button type="submit">Simpan</button>
    </form>
  </body>
</html>
