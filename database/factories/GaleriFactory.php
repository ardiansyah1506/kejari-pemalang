<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galeri>
 */
class GaleriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kegiatan = [
            'Pemusnahan Barang Bukti Narkotika',
            'Penyuluhan Hukum Program Jaksa Masuk Sekolah',
            'Pelantikan dan Serah Terima Jabatan',
            'Rapat Koordinasi Pengawasan Aliran Kepercayaan Masyarakat',
            'Kegiatan Donor Darah HUT Persaja',
            'Bhakti Sosial Kejaksaan Negeri Pemalang'
        ];

        return [
            'judul' => fake()->randomElement($kegiatan) . ' Tahun 202' . fake()->numberBetween(0, 4),
            'foto' => 'https://placehold.co/600x400.png?text=Foto+Dokumentasi+\n' . fake()->randomElement(['800x600', '600x400', '4x6', '3x4', '16:9']),
        ];
    }
}
