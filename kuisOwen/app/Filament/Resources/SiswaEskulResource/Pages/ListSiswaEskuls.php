<?php

namespace App\Filament\Resources\SiswaEskulResource\Pages;

use App\Filament\Resources\SiswaEskulResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiswaEskuls extends ListRecords
{
    protected static string $resource = SiswaEskulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetak_laporanSiswaEskul') //nama Fungsi yang dipanggil
            ->label('Cetak Laporan Siswa Eskul') //label yang ditampilkan di button
            ->icon('heroicon-o-printer')
            ->action(fn() => static::cetakLaporan()) // A99
            ->requiresConfirmation()
            ->modalHeading('Cetak Laporan Siswa Eskul')
            ->modalSubheading('Apakah Anda yakin ingin mencetak laporan Siswa Eskul?'),
        ];
    }
    public static function cetakLaporan() // A99
    {
        // Ambil data pengguna
        $data = \App\Models\siswa_eskul::all();
        // Load view untuk cetak PDF
        $pdf = \PDF::loadView('laporan.cetakSiswaEskul', ['data' => $data]);
        // Unduh file PDF
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-siswa-eskul.pdf');
    }

    }

