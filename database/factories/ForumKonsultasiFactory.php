<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ForumKonsultasi>
 */
class ForumKonsultasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pertanyaan = [
            'Mohon info terkait prosedur permohonan tilang apabila surat tilang hilang atau rusak.',
            'Bagaimana alur dan syarat permohonan pendampingan hukum (Datun) dari Kejaksaan Negeri untuk instansi pemerintah desa?',
            'Saya ingin melaporkan indikasi tindak pidana korupsi di lingkungan saya, dokumen apa saja yang perlu dilampirkan agar bisa diproses?',
            'Apakah layanan pengambilan barang bukti yang perkara pidana-nya sudah putus berkekuatan hukum tetap dipungut biaya?',
            'Mohon penjelasan terkait kriteria perkara pidana yang dapat diajukan penyelesaian dengan mekanisme Restorative Justice.',
            'Jika saya adalah korban penipuan online, apakah saya bisa langsung berkonsultasi secara tatap muka ke loket PTSP Kejari Pemalang?'
        ];

        return [
            'nama' => fake()->name(),
            'alamat' => fake()->city() . ', Kecamatan ' . fake()->citySuffix(),
            'email' => fake()->unique()->safeEmail(),
            'no_hp' => fake()->phoneNumber(),
            'keterangan' => fake()->randomElement($pertanyaan),
            'dokumen_pendukung' => fake()->boolean(30) ? 'https://placehold.co/400x600.png?text=Dokumen+A4+\nBerkas+Konsultasi' : null,
        ];
    }
}
