<?php
   //LATIHAN 1
   
   $nama = 'Ahmad Habibi';
    $umur = 17;
    $asalSekolah = 'SMK Telkom Malang';
    
    echo "Nama, perkenalkan namaku ".$nama. ", aku berusia ".$umur." tahun. Aku bersekolah di ".$asalSekolah;
   
   //LATIHAN 3

    $x="";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nilaiUser = $_POST['nilai'];
        
        
                if($nilaiUser > 90){
                    $x="A+";
                }
        
                elseif($nilaiUser >= 80 && $nilaiUser <= 90){
                    $x="A";
                }
        
                elseif($nilaiUser >= 70 && $nilaiUser <= 80){
                    $x="B+";
                }
        
                elseif($nilaiUser >= 60 && $nilaiUser <= 70){
                    $x="B";
                }
        
                elseif($nilaiUser >= 50 && $nilaiUser <= 60){
                    $x="C+";
                }
        
                elseif($nilaiUser >= 40 && $nilaiUser <= 50){
                    $x="C";
                }
        
                elseif($nilaiUser >= 30 && $nilaiUser <= 40){
                    $x="D";
                }
        
                else{
                    $x="E";
                }
    }

    //LATIHAN 2

    $siswa = array(
        ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'], 
        ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'], 
        ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'], 
        ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'], 
    );


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Masukan Nilai</h1>
        <input type="text" name="nilai">
        <input type="button" name="submit" value="OK">
    </form>
    <h1>Nilai Kamu</h1>
    <p><?php echo $x ?></p>
    <?php 
    foreach($siswa as $values){ ?>
    <div>
        <h2><?= $values['nama']?></h2>
        <h2><?= $values['kelas']?></h2>
        <h2><?= $values['jurusan']?></h2>
    </div>
    <?php }?>
    
</body>
</html>