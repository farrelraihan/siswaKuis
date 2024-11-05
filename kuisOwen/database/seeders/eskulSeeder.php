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

        $eskul = new eskul();
        $eskul->id = 'E001';
        $eskul->nama_eskul = 'Paskibra';
        $eskul->pembina = 'Budi';
        $eskul->jadwal = 'Senin 12:00-14:00';
        $eskul->ruangan = 'Aula';
        $eskul->kuota = '30';
        $eskul->deskripsi = 'Paskibra adalah ekstrakurikuler yang bergerak di bidang kepramukaan';
        $eskul->save();

        $eskul = new eskul();
$eskul->id = 'E002';
$eskul->nama_eskul = 'Basket';
$eskul->pembina = 'Arif';
$eskul->jadwal = 'Rabu 15:00-17:00';
$eskul->ruangan = 'Lapangan Basket';
$eskul->kuota = '20';
$eskul->deskripsi = 'Ekstrakurikuler basket untuk melatih kerjasama tim dan skill bermain basket';
$eskul->save();

$eskul = new eskul();
$eskul->id = 'E003';
$eskul->nama_eskul = 'Paduan Suara';
$eskul->pembina = 'Citra';
$eskul->jadwal = 'Jumat 14:00-16:00';
$eskul->ruangan = 'Ruang Musik';
$eskul->kuota = '25';
$eskul->deskripsi = 'Mengembangkan bakat menyanyi dan harmonisasi dalam grup';
$eskul->save();
    }
}
