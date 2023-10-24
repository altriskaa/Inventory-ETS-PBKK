<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name' => fake()->name(),
        'jenis_barang' => fake()->word,
        'kondisi_barang' => fake()->randomElement(['baik', 'layak', 'rusak']),
        'keterangan' => fake()->sentence,
        'kecacatan' => fake()->optional()->sentence,
        'jumlah' => fake()->numberBetween(1, 100),
        'gambar' => fake()->imageUrl(200, 200, 'products', true),
        ];
    }
}
