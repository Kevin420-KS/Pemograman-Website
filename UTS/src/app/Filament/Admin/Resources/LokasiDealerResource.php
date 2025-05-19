<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LokasiDealerResource\Pages;
use App\Models\LokasiDealer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class LokasiDealerResource extends Resource
{
    protected static ?string $model = LokasiDealer::class;

    // Menggunakan ikon "BuildingStorefront" (outline) dari Heroicons
    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static ?string $navigationLabel = 'Lokasi Dealer';
    protected static ?string $pluralModelLabel = 'Lokasi Dealer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kota')
                    ->label('Kota')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kota')
                    ->label('Kota')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLokasiDealers::route('/'),
            'create' => Pages\CreateLokasiDealer::route('/create'),
            'edit' => Pages\EditLokasiDealer::route('/{record}/edit'),
        ];
    }
}
