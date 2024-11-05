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

        $siswa = new siswa();
        $siswa->id = 'S001';
        $siswa->nama_siswa = 'Owen';
        $siswa->kelas = 'XII RPL 1';
        $siswa->NIS = '1234567890';
        $siswa->tanggal_lahir = '';
        $siswa->alamat = 'Jl. Raya No. 1';
        $siswa->no_hp = '081234567890';
        $siswa->email = 'o@g.com';
        $siswa->save();

        $siswa = new siswa();
$siswa->id = 'S002';
$siswa->nama_siswa = 'Amelia';
$siswa->kelas = 'XI TKJ 2';
$siswa->NIS = '9876543210';
$siswa->tanggal_lahir = '2005-05-15';
$siswa->alamat = 'Jl. Mawar No. 12';
$siswa->no_hp = '089876543210';
$siswa->email = 'a@example.com';
$siswa->save();

$siswa = new siswa();
$siswa->id = 'S003';
$siswa->nama_siswa = 'Budi';
$siswa->kelas = 'X MM 1';
$siswa->NIS = '1029384756';
$siswa->tanggal_lahir = '2006-02-20';
$siswa->alamat = 'Jl. Melati No. 5';
$siswa->no_hp = '08574839201';
$siswa->email = 'b@example.com';
$siswa->save();

$siswa = new siswa();
$siswa->id = 'S004';
$siswa->nama_siswa = 'Cindy';
$siswa->kelas = 'XII RPL 2';
$siswa->NIS = '2938475610';
$siswa->tanggal_lahir = '2004-08-03';
$siswa->alamat = 'Jl. Anggrek No. 21';
$siswa->no_hp = '08182736455';
$siswa->email = 'c@example.com';
$siswa->save();

$siswa = new siswa();
$siswa->id = 'S005';
$siswa->nama_siswa = 'David';
$siswa->kelas = 'XI TKJ 1';
$siswa->NIS = '3847561029';
$siswa->tanggal_lahir = '2005-11-11';
$siswa->alamat = 'Jl. Kamboja No. 8';
$siswa->no_hp = '08765432109';
$siswa->email = 'd@example.com';
$siswa->save();
    



}
}