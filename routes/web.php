<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "profile",
        "name" => "Ahnaf Ghalih",
        "nim" => "13242520046",
        "prodi" => "Teknologi Informasi",
        "gambar" => "FC BARCELONA.png"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "kontak",
        "Whatsaap" => "08123456789"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "berita",
    ]);
});