<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\siswa_eskul;

class siswaEskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        siswa_eskul::query()->delete();

        $siswaEskul = new siswa_eskul();
        $siswaEskul->id = 'SE001';
        $siswaEskul->siswa_id = 'S001';
        $siswaEskul->eskul_id = 'E001';
        $siswaEskul->tanggal_daftar = '2021-09-01';
        $siswaEskul->status = 'Aktif';
        $siswaEskul->save();

        $siswaEskul = new siswa_eskul();
        $siswaEskul->id = 'SE002';
        $siswaEskul->siswa_id = 'S002';
        $siswaEskul->eskul_id = 'E002';
        $siswaEskul->tanggal_daftar = '2022-10-01';
        $siswaEskul->status = 'Tidak Aktif';
        $siswaEskul->save();

        $siswaEskul = new siswa_eskul();
        $siswaEskul->id = 'SE003';
        $siswaEskul->siswa_id = 'S003';
        $siswaEskul->eskul_id = 'E003';
        $siswaEskul->tanggal_daftar = '2022-09-01';
        $siswaEskul->status = 'Menunggu Konfirmasi';
        $siswaEskul->save();

        $siswaEskul = new siswa_eskul();
        $siswaEskul->id = 'SE004';
        $siswaEskul->siswa_id = 'S004';
        $siswaEskul->eskul_id = 'E001';
        $siswaEskul->tanggal_daftar = '2022-09-01';
        $siswaEskul->status = 'Aktif';
        $siswaEskul->save();

        $siswaEskul = new siswa_eskul();
        $siswaEskul->id = 'SE005';
        $siswaEskul->siswa_id = 'S005';
        $siswaEskul->eskul_id = 'E002';
        $siswaEskul->tanggal_daftar = '2022-09-01';
        $siswaEskul->status = 'Aktif';
        $siswaEskul->save();



    }
}
