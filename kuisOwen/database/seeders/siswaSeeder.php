<?php

namespace Database\Seeders;

use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        siswa::query()->delete();

        $siswas = [
            ['id' => 'S001', 'nama_siswa' => 'Andi', 'kelas' => 'XII RPL 1', 'NIS' => '1234567890', 'tanggal_lahir' => '2004-01-01', 'alamat' => 'Jl. Raya No. 1', 'no_hp' => '081234567890', 'email' => 'andi@g.com'],
            ['id' => 'S002', 'nama_siswa' => 'Budi', 'kelas' => 'XI TKJ 2', 'NIS' => '9876543210', 'tanggal_lahir' => '2005-05-15', 'alamat' => 'Jl. Mawar No. 12', 'no_hp' => '089876543210', 'email' => 'budi@example.com'],
            ['id' => 'S003', 'nama_siswa' => 'Citra', 'kelas' => 'X MM 1', 'NIS' => '1029384756', 'tanggal_lahir' => '2006-02-20', 'alamat' => 'Jl. Melati No. 5', 'no_hp' => '08574839201', 'email' => 'citra@example.com'],
            ['id' => 'S004', 'nama_siswa' => 'Dewi', 'kelas' => 'XII RPL 2', 'NIS' => '2938475610', 'tanggal_lahir' => '2004-08-03', 'alamat' => 'Jl. Anggrek No. 21', 'no_hp' => '08182736455', 'email' => 'dewi@example.com'],
            ['id' => 'S005', 'nama_siswa' => 'Eko', 'kelas' => 'XI TKJ 1', 'NIS' => '3847561029', 'tanggal_lahir' => '2005-11-11', 'alamat' => 'Jl. Kamboja No. 8', 'no_hp' => '08765432109', 'email' => 'eko@example.com'],
            ['id' => 'S006', 'nama_siswa' => 'Fajar', 'kelas' => 'XII RPL 3', 'NIS' => '5647382910', 'tanggal_lahir' => '2004-07-21', 'alamat' => 'Jl. Kenanga No. 9', 'no_hp' => '081234567891', 'email' => 'fajar@example.com'],
            ['id' => 'S007', 'nama_siswa' => 'Gita', 'kelas' => 'XI TKJ 3', 'NIS' => '1928374650', 'tanggal_lahir' => '2005-03-14', 'alamat' => 'Jl. Dahlia No. 10', 'no_hp' => '089876543211', 'email' => 'gita@example.com'],
        ];

        foreach ($siswas as $siswa) {
            siswa::create($siswa);
        }
    }
}