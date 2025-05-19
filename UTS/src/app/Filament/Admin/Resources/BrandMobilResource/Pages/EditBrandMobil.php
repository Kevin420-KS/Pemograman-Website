<?php

namespace App\Filament\Admin\Resources\BrandMobilResource\Pages;

use App\Filament\Admin\Resources\BrandMobilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrandMobil extends EditRecord
{
    protected static string $resource = BrandMobilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
