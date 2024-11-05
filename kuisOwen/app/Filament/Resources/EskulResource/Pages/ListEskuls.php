<?php

namespace App\Filament\Resources\EskulResource\Pages;

use App\Filament\Resources\EskulResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEskuls extends ListRecords
{
    protected static string $resource = EskulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetak_laporanEskul') //nama Fungsi yang dipanggil
            ->label('Cetak Laporan Eskul') //label yang ditampilkan di button
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakLaporan()) // A99
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan Eskul')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan Eskul?'),

            Actions\Action::make('cetak_laporanAktif') //nama Fungsi yang dipanggil
            ->label('Cetak Laporan Aktif') //label yang ditampilkan di button
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakLaporanAktif()) // A99
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan Aktif')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan Aktif?'),
        ];
    }
    public static function cetakLaporan() // A99
    {
        // Ambil data pengguna
        $data = \App\Models\eskul::all();
        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakEskul', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-eskul.pdf');
    }

    public static function cetakLaporanAktif() // A99
    {
        // Query to get the required data
        $data = \DB::table('eskuls')
            ->leftJoin('siswa_eskuls', function($join) {
                $join->on('eskuls.id', '=', 'siswa_eskuls.eskul_id')
                     ->where('siswa_eskuls.status', '=', 'Aktif');
            })
            ->select('eskuls.nama_eskul', 'eskuls.kuota', \DB::raw('COUNT(siswa_eskuls.id) as jumlah_siswa_aktif'))
            ->groupBy('eskuls.nama_eskul', 'eskuls.kuota')
            ->get();

        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakLaporanAktif', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-aktif.pdf');
    }
}

