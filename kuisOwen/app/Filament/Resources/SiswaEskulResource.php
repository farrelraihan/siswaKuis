<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiswaEskulResource\Pages;
use App\Filament\Resources\SiswaEskulResource\RelationManagers;
use App\Models\siswa_eskul; // Ensure this class exists in the specified namespace
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiswaEskulResource extends Resource
{
    protected static ?string $model = siswa_eskul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel():string{
        return'Siswa Eskul';
    }

    public static function getPluralModelLabel():string{
        return 'Siswa Eskul';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->label('Siswa-Eksul ID')
                    ->placeholder('SE001')
                    ->required()
                    ,
                Forms\Components\TextInput::make('siswa_id')
                    ->label('Siswa ID')
                    ->placeholder('Siswa ID')
                    ->required()
                    ,
                Forms\Components\TextInput::make('eskul_id')
                    ->label('Eskul ID')
                    ->placeholder('Eskul ID')
                    ->required()
                    ,
                Forms\Components\DatePicker::make('tanggal_daftar')
                    ->label('Tanggal Daftar')
                    ->placeholder('Tanggal Daftar')
                    ->required()
                    ,
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->placeholder('Status')
                    ->options([
                        'Aktif' => 'Aktif',
                        'Tidak Aktif' => 'Tidak Aktif',
                        'Menunggu Konfirmasi' => 'Menunggu Konfirmasi',
                    ])
                    ->required()
                    ,

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('Siswa-Eskul ID')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('siswa_id')
                    ->label('Siswa ID')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('eskul_id')
                    ->label('Eskul ID')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_daftar')
                    ->label('Tanggal Daftar')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiswaEskuls::route('/'),
            'create' => Pages\CreateSiswaEskul::route('/create'),
            'edit' => Pages\EditSiswaEskul::route('/{record}/edit'),
        ];
    }
}
