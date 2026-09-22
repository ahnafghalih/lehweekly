<?php

    require 'fungsi.php';

    $id = $_GET['id'];

    $query = "SELECT * FROM mahasiswa WHERE id = $id";

    $mhs = tampildata($query)[0];

    if(isset($_POST['kirim']))
    {
        

        if (editdata($_POST) > 0)
        {
            echo "
                <script>
                    alert('Data berhasil di edit!');
                    window.location.href = 'mahasiswa.php';
                </script>
            ";
        }
        else
        {
            echo "
                <script>
                    alert('Data gagal di edit!');
                    window.location.href = 'mahasiswa.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aset/css/style.css">
</head>

<body class="tambah-page">
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="mahasiswa.php">Data Mahasiswa</a>
        </nav>
    </header>

    <main>
        <h2>Edit Data Mahasiswa</h2>

        <div class="card">
            <form action="" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">

    <table cellpadding="5px">

        <tr>
            <td><label for="nama">Nama</label></td>
            <td>:</td>
            <td>
                <input type="text" id="nama" name="nama"
                       value="<?= $mhs['nama']; ?>" required>
            </td>
        </tr>

        <tr>
            <td><label for="nim">NIM</label></td>
            <td>:</td>
            <td>
                <input type="text" id="nim" name="nim"
                       value="<?= $mhs['nim']; ?>" required>
            </td>
        </tr>

        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td>:</td>
            <td>
                <input type="text" id="jurusan" name="jurusan"
                       value="<?= $mhs['jurusan']; ?>" required>
            </td>
        </tr>

        <tr>
            <td><label for="email">Email</label></td>
            <td>:</td>
            <td>
                <input type="email" id="email" name="email"
                       value="<?= $mhs['email']; ?>" required>
            </td>
        </tr>

        <tr>
            <td><label for="nohp">Nomor HP</label></td>
            <td>:</td>
            <td>
                <input type="text" id="nohp" name="nohp"
                       value="<?= $mhs['no_hp']; ?>" required>
            </td>
        </tr>

        <tr>
            <td><label for="foto">Foto</label></td>
            <td>:</td>
            <td>
                <img src="aset/image/<?= $mhs['foto']; ?>" width="80">
                <br><br>
                <input type="file" id="foto" name="foto">
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <button type="submit" name="kirim">
                    Edit Data
                </button>
            </td>
        </tr>

    </table>

</form>
        </div>
    </main>

    <footer align="center">
        <p>© 2026 TI UNIMUS</p>
    </footer>

</body>
</html>