<?php

namespace App\Filament\Admin\Resources\LokasiDealerResource\Pages;

use App\Filament\Admin\Resources\LokasiDealerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLokasiDealers extends ListRecords
{
    protected static string $resource = LokasiDealerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
