<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Ahnaf Ghalih",
        "nim"  => "13242520046",
        "prodi"=> "Teknologi Informasi",
        "gambar"=> "FC BARCELONA.png"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'contact'
    ]);
});



Route::get('/berita', function () {
    $data_berita = [
    [
        "judul" => "Mahasiswa TI",
        "slug" => "mahasiswa-ti",
        "penulis" => "Admin",
        "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident incidunt assumenda atque nisi animi eius iusto et odio dicta, necessitatibus consequatur? Consequatur a amet dolor quod necessitatibus. Autem veritatis voluptatum, reiciendis veniam perferendis voluptas dignissimos praesentium et sequi nam, quo, perspiciatis dolores voluptates a quibusdam repellendus possimus facere ratione nisi quas iusto. Aliquid maxime asperiores magnam quo porro maiores sunt corrupti laborum quasi tempore architecto atque, voluptatum recusandae, officiis accusantium, velit quod. A ullam cum, laudantium maxime perferendis nulla fuga sed ab quos voluptate unde ut ipsam corporis atque iure voluptatem exercitationem ipsa quasi mollitia numquam quas! Nobis, dolorem"
    ],
    [
        "judul" => "Dosen TI",
        "slug" => "dosen-ti",
        "penulis" => "Leeh S.kom",
        "konten" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem provident incidunt assumenda atque nisi animi eius iusto et odio dicta, necessitatibus consequatur? Consequatur a amet dolor quod necessitatibus. Autem veritatis voluptatum, reiciendis veniam perferendis voluptas dignissimos praesentium et sequi nam, quo, perspiciatis dolores voluptates a quibusdam repellendus possimus facere ratione nisi quas iusto. Aliquid maxime asperiores magnam quo porro maiores sunt corrupti laborum quasi tempore architecto atque, voluptatum recusandae, officiis accusantium, velit quod. A ullam cum, laudantium maxime perferendis nulla fuga sed ab quos voluptate unde ut ipsam corporis atque iure voluptatem exercitationem ipsa quasi mollitia numquam quas! Nobis, dolorem"
    ]
];
Route::get('berita/{slug}', function($slug) {
    $singelnews = [];
    foreach ($data_berita as $berita)
    {
        if($berita["slug"] == $slug)
        {
            $singelnews = $berita;
        }
    }

    $berita = collect($data_berita)->firstWhere('slug', $slug);

    return view('beritatunggal', [
        "title" => "judul berita tunggal",
        "singelnews" => $singelnews
    ]);
});
    return view('Berita', [
        "title" => "Berita",
        "beritas" => $data_berita
    ]);
});

