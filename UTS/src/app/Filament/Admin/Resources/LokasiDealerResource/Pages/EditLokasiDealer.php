<?php

namespace App\Filament\Admin\Resources\LokasiDealerResource\Pages;

use App\Filament\Admin\Resources\LokasiDealerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLokasiDealer extends EditRecord
{
    protected static string $resource = LokasiDealerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
