<?php

namespace App\Filament\Resources\TipoVehiculoResource\Pages;

use App\Filament\Resources\TipoVehiculoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTipoVehiculos extends ListRecords
{
    protected static string $resource = TipoVehiculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
