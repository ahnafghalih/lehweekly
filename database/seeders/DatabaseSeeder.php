<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Berita;
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {
        // App
        Berita::factory(5)->create();
    }
}