<?php
// Pengaturan Koneksi ke database
$host = "localhost";
$user = "root";
$pass = ""; // Kosongkan saja, Laragon tidak pakai sandi
$db   = "flrweekly8-TI"; // Nama database kamu

// Menghubungkan ke MySQL
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek apakah koneksi berhasil
if (!$koneksi) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}
?>