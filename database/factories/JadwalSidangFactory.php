<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JadwalSidang>
 */
class JadwalSidangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'perkara' => fake()->word() . ' vs ' . fake()->word(),
            'tanggal_sidang' => fake()->dateTimeBetween('+1 week', '+1 month'),
            'penggugat' => fake()->name(),
            'tergugat' => fake()->name(),
            'agenda' => fake()->sentence(3),
            'keterangan' => fake()->paragraph(),
        ];
    }
}
