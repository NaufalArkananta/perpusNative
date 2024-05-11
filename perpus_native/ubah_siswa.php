<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ubah Siswa</title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_siswa = mysqli_query($db, "SELECT * FROM siswa WHERE id_siswa = '".$_GET['id_siswa']."'");
    $dt_siswa = mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="post">
        <input type="hidden" name="id_siswa" value="<?= $dt_siswa['id_siswa'] ?>">
        <div class="mb-3">
            <label for="nama_siswa" class="form-label">Nama Siswa:</label>
            <input type="text" name="nama_siswa" value="<?= $dt_siswa['nama_siswa'] ?>" class="form-control" id="nama_siswa">
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" value="<?= $dt_siswa['tanggal_lahir'] ?>" class="form-control" id="tanggal_lahir">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender:</label>
            <select name="gender" class="form-control" id="gender">
                <option></option>
                <?php 
                $arr_gender = array('L' => 'Laki-laki', 'P' => 'Perempuan');
                foreach ($arr_gender as $key_gender => $val_gender):
                    $selek = ($key_gender == $dt_siswa['gender']) ? "selected" : "";
                ?>
                <option value="<?= $key_gender ?>" <?= $selek ?>><?= $val_gender ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <textarea name="alamat" class="form-control" rows="4" id="alamat"><?= $dt_siswa['alamat'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="id_kelas" class="form-label">Kelas:</label>
            <select name="id_kelas" class="form-control" id="id_kelas">
                <option></option>
                <?php 
                $qry_kelas = mysqli_query($db, "SELECT * FROM kelas");
                while ($data_kelas = mysqli_fetch_array($qry_kelas)):
                    $selek = ($data_kelas['id_kelas'] == $dt_siswa['id_kelas']) ? "selected" : "";
                ?>
                <option value="<?= $data_kelas['id_kelas'] ?>" <?= $selek ?>><?= $data_kelas['nama_kelas'] ?></option>
                <?php endwhile ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username:</label>
            <input type="text" name="username" value="<?= $dt_siswa['username'] ?>" class="form-control" id="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" value="" class="form-control" id="password">
        </div>
        <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
