<?php
// Koneksi ke database kamu yang bernama lehweekly
$koneksi = mysqli_connect("localhost", "root", "", "lehweekly");

// Cek koneksi kalau gagal
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Fungsi untuk ambil data dari database
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
?>