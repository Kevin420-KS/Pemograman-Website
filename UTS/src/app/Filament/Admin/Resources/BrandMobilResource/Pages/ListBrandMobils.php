<?php

namespace App\Filament\Admin\Resources\BrandMobilResource\Pages;

use App\Filament\Admin\Resources\BrandMobilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrandMobils extends ListRecords
{
    protected static string $resource = BrandMobilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
