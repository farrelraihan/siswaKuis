<?php

namespace App\Filament\Resources\SiswaEskulResource\Pages;

use App\Filament\Resources\SiswaEskulResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiswaEskul extends EditRecord
{
    protected static string $resource = SiswaEskulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
