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

        $fotos = [
            'https://images.unsplash.com/photo-1585829365295-ab7cd400c167?q=80&w=800&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1575517111478-7f6afd0973db?q=80&w=800&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=800&auto=format&fit=crop',
            'https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop'
        ];

        return [
            'judul' => fake()->randomElement($kegiatan) . ' Tahun 202' . fake()->numberBetween(0, 4),
            'foto' => fake()->randomElement($fotos),
        ];
    }
}
