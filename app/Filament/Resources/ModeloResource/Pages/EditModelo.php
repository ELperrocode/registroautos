<?php

namespace App\Filament\Resources\ModeloResource\Pages;

use App\Filament\Resources\ModeloResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModelo extends EditRecord
{
    protected static string $resource = ModeloResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
