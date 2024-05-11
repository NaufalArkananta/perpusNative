<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Form</title>
</head>
<body>
    <h3 class="title">Tampil Nilai Form</h3>
    <p>Nama: <?= $_POST['nama'] ?></p>
    <p>Kelamin: <?= $_POST['kelamin'] ?></p>
    <p>Agama: <?= $_POST['agama'] ?></p>
    <p>Alamat: <?= $_POST['alamat'] ?></p>
    <p>Tempat Lahir: <?= $_POST['tempatLahir'] ?></p>
    <p>Tanggal Lahir: <?= $_POST['tanggalLahir'] ?></p>
    <p>Hobi: <?= $_POST['hobi'] ?></p>
    <p>Cita-cita: <?= $_POST['citacita'] ?></p>
    <p>Usia: <?= $_POST['usia'] ?></p>
    <p>Asal Sekolah: <?= $_POST['asalSekolah'] ?></p>
</body>
</html>