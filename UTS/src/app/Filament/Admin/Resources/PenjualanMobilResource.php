<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PenjualanMobilResource\Pages;
use App\Models\PenjualanMobil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class PenjualanMobilResource extends Resource
{
    protected static ?string $model = PenjualanMobil::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Penjualan Mobil';
    protected static ?string $pluralModelLabel = 'Penjualan Mobil';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('brand_mobil_id')
                    ->label('Brand Mobil ID')
                    ->required(),
                TextInput::make('daerah')->required(),
                TextInput::make('terjual')->numeric()->required(),
                TextInput::make('tahun_penjualan')->numeric()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('brand_mobil_id')->sortable()->label('Brand Mobil ID'),
                TextColumn::make('daerah')->sortable(),
                TextColumn::make('terjual'),
                TextColumn::make('tahun_penjualan'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenjualanMobils::route('/'),
            'create' => Pages\CreatePenjualanMobil::route('/create'),
            'edit' => Pages\EditPenjualanMobil::route('/{record}/edit'),
        ];
    }
}
