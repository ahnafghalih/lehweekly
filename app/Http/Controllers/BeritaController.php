<?php

namespace App\Http\Controllers;

use App\Models\berita;
use PhpParser\Node\Stmt\Foreach_;

// use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function tampilberita()
    {
        return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::all(),
    ]);
    }

    public static function tampilberitatunggal($slug)
    {
        $beritas = Berita::all();

        $singlenews =[];

        Foreach($beritas as $berita)
        {
            if($berita["slug"] === $slug)
                {
                    $singlenews = $berita;
                }
        }

        return view('beritatunggal', [
        "title" => $singlenews["judul"],
        "singelnews" => $singlenews,
    ]);
    }
}