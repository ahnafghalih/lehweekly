<?php
// Panggil file koneksi yang sudah dibuat
require "koneksi.php";

// Ambil data yang dikirim dari form
$nama = $_POST['nama'];
$nim  = $_POST['nim'];

// Perintah untuk memasukkan data ke tabel mahasiswa
$sql = "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')";

// Jalankan perintahnya
if (mysqli_query($koneksi, $sql)) {
    echo "<h3 style='color: green;'>✅ Data berhasil disimpan ke database!</h3>";
    echo "<br><a href='TambahData.php'>Kembali ke Form</a>";
} else {
    echo "<h3 style='color: red;'>❌ Gagal menyimpan data: " . mysqli_error($koneksi) . "</h3>";
    echo "<br><a href='TambahData.php'>Coba Lagi</a>";
}

// Tutup koneksi
mysqli_close($koneksi);
?>