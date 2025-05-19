<?php

namespace App\Filament\Admin\Resources\PenjualanMobilResource\Pages;

use App\Filament\Admin\Resources\PenjualanMobilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenjualanMobils extends ListRecords
{
    protected static string $resource = PenjualanMobilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
