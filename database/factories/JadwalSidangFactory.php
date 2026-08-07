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
        $perkara = [
            'Tindak Pidana Umum - Narkotika',
            'Tindak Pidana Umum - Pencurian',
            'Tindak Pidana Khusus - Korupsi',
            'Tindak Pidana Umum - Penipuan / Penggelapan',
            'Tindak Pidana Ringan (Tipiring)'
        ];

        $agenda = [
            'Pembacaan Surat Dakwaan',
            'Pemeriksaan Saksi-saksi',
            'Pemeriksaan Terdakwa',
            'Pembacaan Tuntutan (Requisitoir)',
            'Pembacaan Putusan (Vonis)'
        ];

        $keterangan = [
            'Sidang dilaksanakan di Ruang Tirta, Pengadilan Negeri Pemalang',
            'Terdakwa hadir secara virtual dari Rutan',
            'Sidang ditunda minggu depan karena saksi berhalangan hadir',
            'Persidangan berjalan lancar, aman, dan terkendali',
        ];

        return [
            'perkara' => fake()->randomElement($perkara),
            'tanggal_sidang' => fake()->dateTimeBetween('-1 month', '+1 month'),
            'penggugat' => 'JPU Kejari Pemalang',
            'tergugat' => fake()->name(),
            'agenda' => fake()->randomElement($agenda),
            'keterangan' => fake()->randomElement($keterangan),
        ];
    }
}
