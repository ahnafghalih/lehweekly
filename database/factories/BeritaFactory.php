<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BeritaFactory extends Factory
{
    public function definition(): array
    {
        $judul = fake()->sentence(5);

        return [
            'judul' => $judul,
            'slug' => Str::slug($judul) . '-' . fake()->unique()->numberBetween(1, 99999),
            'penulis' => fake()->name(),
            'konten' => fake()->paragraphs(5, true),
        ];
    }
}
