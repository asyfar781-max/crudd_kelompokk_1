<?php

namespace Database\Factories;

use App\Models\buku;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'judul' => fake()->sentence(3),
            'penulis' => fake()->name(),
            'penerbit' => fake()->company(),
            'tahun_terbit' => fake()->numberBetween(2015, 2026),
            'isbn' => fake()->unique()->numerify('978978######'),
            'stok' => fake()->numberBetween(1, 50),
        ];
    }
}
