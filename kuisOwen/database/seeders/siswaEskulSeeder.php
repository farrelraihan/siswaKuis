<?php

namespace Database\Seeders;

use App\Models\siswa_eskul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class siswaEskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        siswa_eskul::query()->delete();

        $siswaEskuls = [
            ['id' => 'SE001', 'siswa_id' => 'S001', 'eskul_id' => 'E001', 'tanggal_daftar' => '2022-01-01', 'status' => 'Aktif'],
            ['id' => 'SE002', 'siswa_id' => 'S002', 'eskul_id' => 'E002', 'tanggal_daftar' => '2022-02-01', 'status' => 'Aktif'],
            ['id' => 'SE003', 'siswa_id' => 'S003', 'eskul_id' => 'E003', 'tanggal_daftar' => '2022-03-01', 'status' => 'Aktif'],
            ['id' => 'SE004', 'siswa_id' => 'S004', 'eskul_id' => 'E004', 'tanggal_daftar' => '2022-04-01', 'status' => 'Aktif'],
            ['id' => 'SE005', 'siswa_id' => 'S005', 'eskul_id' => 'E001', 'tanggal_daftar' => '2022-05-01', 'status' => 'Tidak Aktif'],
            ['id' => 'SE006', 'siswa_id' => 'S006', 'eskul_id' => 'E002', 'tanggal_daftar' => '2022-06-01', 'status' => 'Menunggu Konfirmasi'],
            ['id' => 'SE007', 'siswa_id' => 'S007', 'eskul_id' => 'E003', 'tanggal_daftar' => '2022-07-01', 'status' => 'Tidak Aktif'],
        ];

        foreach ($siswaEskuls as $siswaEskul) {
            siswa_eskul::create($siswaEskul);
        }
    }
}
