<?php

namespace App\Filament\Admin\Resources\KontakSalesResource\Pages;

use App\Filament\Admin\Resources\KontakSalesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKontakSales extends EditRecord
{
    protected static string $resource = KontakSalesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
