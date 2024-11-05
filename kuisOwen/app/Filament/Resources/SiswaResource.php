<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiswaResource\Pages;
use App\Filament\Resources\SiswaResource\RelationManagers;
use App\Models\Siswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiswaResource extends Resource
{
    protected static ?string $model = Siswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel():string{
        return'Siswa';
    }

    public static function getPluralModelLabel():string{
        return 'Siswa';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->label('ID Siswa')
                    ->placeholder('S001')
                    ->required()
                    ,
                Forms\Components\TextInput::make('nama_siswa')
                    ->label('Nama Siswa')
                    ->placeholder('Nama Siswa')
                    ->required()
                    ,
                Forms\Components\TextInput::make('kelas')
                    ->label('Kelas')
                    ->placeholder('22SI1')
                    ->required()
                    ,
                Forms\Components\TextInput::make('NIS')
                    ->label('NIS')
                    ->placeholder('NIS')
                    ->required()
                    ,
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->placeholder('Tanggal Lahir')
                    ->required()
                    ,
                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat')
                    ->placeholder('Alamat')
                    ->required()
                    ,
                Forms\Components\TextInput::make('no_hp')
                    ->label('No HP')
                    ->placeholder('No HP')
                    ->required()
                    ,
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->placeholder('Email')
                    ->required()
                    ,
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID Siswa')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_siswa')
                    ->label('Nama Siswa')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelas')
                    ->label('Kelas')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('NIS')
                    ->label('NIS')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_hp')
                    ->label('No HP')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
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
            'index' => Pages\ListSiswas::route('/'),
            'create' => Pages\CreateSiswa::route('/create'),
            'edit' => Pages\EditSiswa::route('/{record}/edit'),
        ];
    }
}
