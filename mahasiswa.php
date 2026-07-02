<?php
require 'fungsi.php';
$mahasiswa = tampildata("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="aset/css/style.css">
</head>
<body>
    <h1 align="center">Selamat Datang</h1>
    <table border="1" align="center" cellspacing="5px" cellpadding="10px">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="about.php">Tentang</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>

    <h2>Data Mahasiswa</h2>
    <a href="TambahData.php">Tambah Data</a>
    <br><br>

    <table border="1" cellspacing="5px" cellpadding="10px">
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">NIM</th>
            <th rowspan="2">Foto</th>
            <th colspan="3">Nilai</th>
        </tr>
        <tr>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
        </tr>

        <?php $nomor = 1; foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td align="center"><?= $nomor++; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['nim']; ?></td>
            <td><img src="aset/image/<?= $mhs['foto']; ?>" width="70px"></td>
            <td align="center"><?= $mhs['tugas']; ?></td>
            <td align="center"><?= $mhs['uts']; ?></td>
            <td align="center"><?= $mhs['uas']; ?></td>
        </tr>
        <?php endforeach; ?>

   
    </table>
</body>
</html>