<?php
    
    require 'fungsi.php';

    $koneksi = mysqli_connect("localhost", "root", "", "lehweekly");

    $query = "SELECT * FROM mahasiswa"; /// perintah
    $mahasiswas = tampildata($query); //// wadah berisi data

?>



<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="aset/css/style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1 align="center">
        Selamat Datang</h1>
    <table border="1" align="center" cellspacing="5px" cellpadding="10px">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="about.php">Tentang</a></td>
            <td><a href="contact.php">contact</a></td>
            <td><a href="mahasiswa.php">Data mahasiswa</a></td>
        </tr>

    </table>
    <h2>
        Data Mahasiswa
    </h2>
    <a href="TambahData.php">Tambah Data</a>

    <table border="1" cellspacing="5px" cellspadding="10px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th >Jurusan</th>
            <th>Email</th>
            <th>no_hp</th>
            <th>Foto </th>
            <th> Aksi </th>
        </tr>
        <?php
            $no = 1;
            foreach($mahasiswas as $mhs) 
                {
        ?>
        <tr>
            <td align="center"><?= $no ?></td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["nim"] ?></td>
            <td align="center"><?php echo $mhs["jurusan"] ?></td>
            <td align="center"><?php echo $mhs["email"] ?></td>
            <td align="center"><?php echo $mhs["no_hp"] ?></td>
            <td><img src="aset/image/<?= $mhs["no_hp"] ?>" width="70px" /></td>
            <td>
                <a href="editdata.php?id=<?= $mhs["id"]; ?>" ><button>Edit</button></a>
                <a href="deletedata.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('YAKINN MAUU DI HAPUSS!!!!!!!!!!!');" ><button>Hapus</button></a>
            </td>
        </tr>
        <?php 
            $no++;
            } 
            ?>
</body>

</html>