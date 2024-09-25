<?php

namespace App\Filament\Resources\PropietarioResource\Pages;

use App\Filament\Resources\PropietarioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPropietario extends EditRecord
{
    protected static string $resource = PropietarioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
