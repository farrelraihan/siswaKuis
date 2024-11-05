<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EskulResource\Pages;
use App\Filament\Resources\EskulResource\RelationManagers;
use App\Models\Eskul;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EskulResource extends Resource
{
    protected static ?string $model = Eskul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel():string{
        return'Eskul';
    }

    public static function getPluralModelLabel():string{
        return 'Eskul';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->label('ID Eskul')
                    ->placeholder('ES001')
                    ->required()
                    ,
                Forms\Components\TextInput::make('nama_eskul')
                    ->label('Nama Eskul')
                    ->placeholder('Coding')
                    ->required()
                    ,
                Forms\Components\TextInput::make('pembina')
                    ->label('Pembina')
                    ->placeholder('Pak Budi')
                    ->required()
                    ,
                Forms\Components\TextInput::make('jadwal')
                    ->label('Jadwal')
                    ->placeholder('Senin 14:00 - 16:00')
                    ->required()
                    ,
                Forms\Components\TextInput::make('ruangan')
                    ->label('Ruangan')
                    ->placeholder('Lab. Komputer')
                    ->required()
                    ,
                Forms\Components\TextInput::make('kuota')
                    ->label('Kuota')
                    ->placeholder('30')
                    ->required()
                    ,
                Forms\Components\TextInput::make('deskripsi')
                    ->label('Deskripsi')
                    ->placeholder('Deskripsi')
                    ->required()
                    ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID Eskul')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_eskul')
                    ->label('Nama Eskul')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('pembina')
                    ->label('Pembina')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('jadwal')
                    ->label('Jadwal')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('ruangan')
                    ->label('Ruangan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kuota')
                    ->label('Kuota')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('Deskripsi')
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
            'index' => Pages\ListEskuls::route('/'),
            'create' => Pages\CreateEskul::route('/create'),
            'edit' => Pages\EditEskul::route('/{record}/edit'),
        ];
    }
}
