<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat 10 berita dummy
        Berita::factory(10)->create();

        // Menambahkan satu berita manual
        DB::table('beritas')->insert([
            'judul' => 'Pemerintah Menanam 1 Juta Pohon di Tahun 2024',
            'slug' => 'pemerintah-menanam-1-juta-pohon-di-tahun-2024',
            'penulis' => 'Admin',
            'konten' => 'Pemerintah Indonesia mengumumkan program penanaman 1 juta pohon untuk meningkatkan kualitas udara, mengurangi dampak perubahan iklim, dan melestarikan keanekaragaman hayati.',
        ]);
    }
}