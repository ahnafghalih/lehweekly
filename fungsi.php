<?php

// Koneksi Database
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "lehweekly"
);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menampilkan Data
function tampildata($query)
{
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Tambah Data
function tambahdata($data, $files)
{
    global $koneksi;

    $nama   = htmlspecialchars($data["nama"]);
    $nim    = htmlspecialchars($data["nim"]);
    $email  = htmlspecialchars($data["email"]);
    $prodi  = htmlspecialchars($data["jurusan"]);
    $nohp   = htmlspecialchars($data["nohp"]);

    // Cek file foto
    if (!isset($files["name"]) || $files["error"] != 0) {
        return 0;
    }

    $namafoto = $files["name"];
    $tmpfoto  = $files["tmp_name"];

    $path = "aset/image/" . $namafoto;

    // Upload file
    if (move_uploaded_file($tmpfoto, $path)) {

        $query = "INSERT INTO mahasiswa
                  (nama, nim, jurusan, email, no_hp, foto)
                  VALUES
                  ('$nama', '$nim', '$prodi', '$email', '$nohp', '$namafoto')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    return 0;
}

// Hapus Data
function deletedata($id)
{
    global $koneksi;

    $query = "DELETE FROM mahasiswa WHERE id = $id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// Edit Data
function editdata($data)
{
    global $koneksi;

    $id     = $data["id"];
    $nama   = htmlspecialchars($data["nama"]);
    $nim    = htmlspecialchars($data["nim"]);
    $email  = htmlspecialchars($data["email"]);
    $prodi  = htmlspecialchars($data["jurusan"]);
    $nohp   = htmlspecialchars($data["nohp"]);
    $foto   = htmlspecialchars($data["foto"]);

    $query = "UPDATE mahasiswa SET
                nama='$nama',
                nim='$nim',
                jurusan='$prodi',
                email='$email',
                no_hp='$nohp',
                foto='$foto'
              WHERE id=$id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

?>