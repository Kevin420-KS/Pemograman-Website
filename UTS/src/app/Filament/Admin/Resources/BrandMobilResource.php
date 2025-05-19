<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BrandMobilResource\Pages;
use App\Models\BrandMobil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Get;
use Filament\Forms\Set;

class BrandMobilResource extends Resource
{
    protected static ?string $model = BrandMobil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Brand Mobil';
    protected static ?string $pluralModelLabel = 'Brand Mobil';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('jenis_mobil')
                    ->label('Jenis Mobil')
                    ->required()
                    ->options([
                        'Mobil Klasik' => 'Mobil Klasik',
                        'Mobil Pickup' => 'Mobil Pickup',
                        'Mobil Listrik' => 'Mobil Listrik',
                        'Mobil Racing' => 'Mobil Racing',
                    ])
                    ->reactive()
                    ->afterStateUpdated(fn (Set $set) => $set('nama_brand', null)),

                Select::make('nama_brand')
                    ->label('Nama Brand Mobil')
                    ->required()
                    ->options(fn (Get $get) => match ($get('jenis_mobil')) {
                        'Mobil Listrik' => [
                            'Tesla' => 'Tesla',
                            'Hyundai' => 'Hyundai',
                            'BMW' => 'BMW',
                            'Nissan' => 'Nissan',
                        ],
                        'Mobil Klasik' => [
                            'Ford' => 'Ford',
                            'Chevrolet' => 'Chevrolet',
                            'Mercedes-Benz' => 'Mercedes-Benz',
                            'Toyota' => 'Toyota',
                        ],
                        'Mobil Racing' => [
                            'Ferrari' => 'Ferrari',
                            'Porsche' => 'Porsche',
                            'McLaren' => 'McLaren',
                            'Lamborghini' => 'Lamborghini',
                        ],
                        'Mobil Pickup' => [
                            'Toyota' => 'Toyota',
                            'Isuzu' => 'Isuzu',
                            'Mazda' => 'Mazda',
                            'Honda' => 'Honda',
                        ],
                        default => [],
                    }),

                FileUpload::make('gambar_brand')
                    ->label('Gambar Brand')
                    ->image()
                    ->directory('brands/images'),

                FileUpload::make('logo_brand')
                    ->label('Logo Brand')
                    ->image()
                    ->directory('brands/logos'),

                Textarea::make('keterangan')
                    ->label('Keterangan')
                    ->rows(4)
                    ->placeholder('Contoh: Mobil Toyota Trueno AE86 adalah sebuah mobil klasik dan awal mula kepopulerannya berawal dari sebuah anime...')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_brand')->label('Nama Brand Mobil')->searchable()->sortable(),
                TextColumn::make('jenis_mobil')->label('Jenis Mobil')->sortable(),
                ImageColumn::make('gambar_brand')->label('Gambar'),
                ImageColumn::make('logo_brand')->label('Logo'),
                TextColumn::make('keterangan')->label('Keterangan')->limit(50),
            ])
            ->filters([
                //
            ])
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
            'index' => Pages\ListBrandMobils::route('/'),
            'create' => Pages\CreateBrandMobil::route('/create'),
            'edit' => Pages\EditBrandMobil::route('/{record}/edit'),
        ];
    }
}
