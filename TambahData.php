<?php

    require 'fungsi.php';
    {
        
    }

    if(isset($_POST["kirim"]))
{
    if(tambahdata($_POST, $_FILES["foto"]) > 0)
    {
        echo "<script>
            alert('Data berhasil ditambahkan');
            window.location.href='mahasiswa.php';
        </script>";
    }
    else
    {
        echo "<script>
            alert('Data gagal ditambahkan');
            window.location.href='mahasiswa.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="aset/css/style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data | Teknologi Informasi</title>
</head>

<body>
    <h2>Tambah Data Mahasiswa</h2>

    <form action="" method="post" enctype="multipart/form-data">

        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required /></td>
            </tr>

            <tr>
                <td><label for="Nim">Nim</label></td>
                <td>:</td>
                <td><input type="text" id="nim" name="nim" required /></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" id="jurusan" name="jurusan"  required/></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email" required/></td>
            </tr>

            <tr>
                <td><label for="no_hp">Nomor HP</label></td>
                <td>:</td>
                <td><input type="number" id="nohp" name="nohp" required /></td>
            </tr>

            <tr>
                 <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="file" id="foto" name="foto" required></td>
                </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="kirim">Tambah Data</button>
                </td>
            </tr>

        </table>

    </form>

</body>

</html>