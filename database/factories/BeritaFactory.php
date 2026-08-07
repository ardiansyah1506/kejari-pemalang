<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $judul = [
            'Kejari Pemalang Musnahkan Barang Bukti Kejahatan Pidum',
            'Tim Pidana Khusus Tetapkan Tersangka Kasus Korupsi Dana Desa',
            'Jaksa Menyapa di Radio Swara Widuri Pemalang',
            'Kejaksaan Gelar Restorative Justice Kasus Pencurian',
            'Pendampingan Hukum Proyek Strategis Daerah di Pemalang'
        ];

        $deskripsi = [
            'Kejaksaan Negeri Pemalang pada hari ini telah melaksanakan kegiatan pemusnahan barang bukti yang telah memiliki kekuatan hukum tetap (inkracht). Kegiatan ini dipimpin langsung oleh Kepala Kejaksaan Negeri dan dihadiri oleh jajaran Forkopimda. Barang bukti yang dimusnahkan meliputi narkotika, senjata tajam, dan handphone.',
            'Bidang Intelijen Kejaksaan Negeri Pemalang sukses mengadakan program Jaksa Masuk Sekolah di beberapa SMA. Program ini bertujuan memberikan kesadaran hukum sejak dini kepada para siswa agar menjauhi kenakalan remaja, narkoba, dan perundungan.',
            'Tim Jaksa Penuntut Umum (JPU) Kejaksaan Negeri Pemalang membacakan surat dakwaan untuk tindak pidana korupsi yang merugikan keuangan negara. Sidang perdana digelar di Pengadilan Tipikor secara terbuka. Tersangka didakwa melanggar undang-undang pemberantasan tindak pidana korupsi.',
            'Sebagai bentuk penyelesaian perkara di luar pengadilan, Kejaksaan Negeri Pemalang menghentikan penuntutan berdasarkan keadilan restoratif (restorative justice). Hal ini dilakukan setelah pelaku dan korban sepakat untuk berdamai tanpa ada intervensi.'
        ];

        return [
            'judul' => fake()->randomElement($judul),
            'deskripsi' => fake()->randomElement($deskripsi) . ' ' . fake()->randomElement($deskripsi),
            'foto' => 'https://placehold.co/800x600.png?text=Thumbnail+Berita+\n' . fake()->randomElement(['800x600', '16:9', '4:3']),
            'publisher' => fake()->randomElement(['Admin Kejari', 'Tim Intelijen Kejari', 'Tim Pidum Kejari']),
        ];
    }
}
