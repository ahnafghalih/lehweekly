
<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

// PROFILE
Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Ahnaf Ghalih",
        "nim"  => "13242520046",
        "prodi"=> "Teknologi Informasi",
        "gambar"=> "FC BARCELONA.png"
    ]);
});

// BERITA
Route::get('/berita', [BeritaController::class, 'tampilberita'])
    ->name('berita.index');

// DETAIL BERITA
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal'])
    ->name('berita.detail');

// KONTAK
Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'contact'
    ]);
});
