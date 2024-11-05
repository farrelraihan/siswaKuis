<?php

namespace Database\Seeders;

use App\Models\eskul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class eskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        eskul::query()->delete();

        $eskuls = [
            ['id' => 'E001', 'nama_eskul' => 'Paskibra', 'pembina' => 'Budi', 'jadwal' => 'Senin 12:00-14:00', 'ruangan' => 'Aula', 'kuota' => '30', 'deskripsi' => 'Paskibra adalah ekstrakurikuler yang bergerak di bidang kepramukaan'],
            ['id' => 'E002', 'nama_eskul' => 'Basket', 'pembina' => 'Arif', 'jadwal' => 'Rabu 15:00-17:00', 'ruangan' => 'Lapangan Basket', 'kuota' => '20', 'deskripsi' => 'Ekstrakurikuler basket untuk melatih kerjasama tim dan skill bermain basket'],
            ['id' => 'E003', 'nama_eskul' => 'Paduan Suara', 'pembina' => 'Citra', 'jadwal' => 'Jumat 14:00-16:00', 'ruangan' => 'Ruang Musik', 'kuota' => '25', 'deskripsi' => 'Mengembangkan bakat menyanyi dan harmonisasi dalam grup'],
            ['id' => 'E004', 'nama_eskul' => 'Futsal', 'pembina' => 'Dani', 'jadwal' => 'Kamis 16:00-18:00', 'ruangan' => 'Lapangan Futsal', 'kuota' => '25', 'deskripsi' => 'Ekstrakurikuler futsal untuk melatih kerjasama tim dan skill bermain futsal'],
        ];

        foreach ($eskuls as $eskul) {
            eskul::create($eskul);
        }
    }
}
