<?php

namespace App\Filament\Resources\SiswaResource\Pages;

use App\Filament\Resources\SiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiswas extends ListRecords
{
    protected static string $resource = SiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetak_laporanSiswa') //nama Fungsi yang dipanggil
            ->label('Cetak Laporan Siswa') //label yang ditampilkan di button
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakLaporan()) // A99
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan Siswa')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan Siswa?'),
        ];
    }

    public static function cetakLaporan() // A99
    {
        // Ambil data pengguna
        $data = \App\Models\Siswa::all();
        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakSiswa', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-siswa.pdf');
    }
}
