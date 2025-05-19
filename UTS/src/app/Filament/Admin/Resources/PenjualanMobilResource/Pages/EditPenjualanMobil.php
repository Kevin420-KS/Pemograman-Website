<?php

namespace App\Filament\Admin\Resources\PenjualanMobilResource\Pages;

use App\Filament\Admin\Resources\PenjualanMobilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenjualanMobil extends EditRecord
{
    protected static string $resource = PenjualanMobilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
