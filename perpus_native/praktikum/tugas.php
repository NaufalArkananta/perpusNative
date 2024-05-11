<?php
$dataProduk = array(
    //nama produk, merk, harga, status stok
    array("Galaxy S21", "Samsung", 19000000, true),
    array("Galaxy A71", "Samsung", 6999000, false),
    array("iPhone 12 Pro Max", "Apple", 20999000, true),
    array("iPhone 12 Mini", "Apple", 10999000, false),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
    <link rel="stylesheet" href="tugas.css">
</head>
<body>
    <!-- tugas 1 -->
    <h3 class="title">tugas 1</h3>
    <div id="container">
        <?php foreach ($dataProduk as $p) :?>
            <div class="item">
                <h3 class="nama-produk"><?= $p[0] ?></h3>
                <p class="merek"><?= $p[1] ?></p>
                <p class="harga"><?= number_format($p[2], 0, ',', '.') ?></p>
                <?php if($p[3] === true) { ?>
                    <p class="stok">Stok tersedia</p>
                    <button id="order" name="order">order</button>
                <?php } else { ?>
                <p class="stok">Stok habis</p>
                <?php }; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- tugas 2 -->
    <h3 class="title">tugas 2</h3>
    <div id="form-container">
        <form action="tampilformtugas2.php" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" required id="nama" name="nama">
            </div>
            <div class="form-group radio">
                <label for="kelamin">Jenis Kelamin</label>
                <div class="radio-item">
                    <input type="radio"required  name="kelamin" id="lakilaki" value="laki-laki">
                    <label for="lakilaki">laki-laki</label>
                </div>
                <div class="radio-item">
                    <input type="radio"required  name="kelamin" id="perempuan" value="perempuan">
                    <label for="perempuan">perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" required id="agama" name="agama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" required id="alamat" name="alamat">
            </div>
            <div class="form-group">
                <label for="tempatLahir">Tempat Lahir</label>
                <input type="text" required id="tempatLahir" name="tempatLahir">
            </div>
            <div class="form-group">
                <label for="tanggalLahir">Tanggal Lahir</label>
                <input type="date" required id="tanggalLahir" name="tanggalLahir">
            </div>
            <div class="form-group">
                <label for="hobi">Hobi</label>
                <input type="text" required id="hobi" name="hobi">
            </div>
            <div class="form-group">
                <label for="citacita">Cita-Cita</label>
                <input type="text" required id="citacita" name="citacita">
            </div>
            <div class="form-group">
                <label for="usia">usia</label>
                <input type="number" required id="usia" name="usia">
            </div>
            <div class="form-group">
                <label for="asalSekolah">Asal Sekolah</label>
                <input type="text" required id="asalSekolah" name="asalSekolah">
            </div>
            <button type="submit" name="submit" class="submit">submit</button>
        </form>
    </div>
</body>
</html>