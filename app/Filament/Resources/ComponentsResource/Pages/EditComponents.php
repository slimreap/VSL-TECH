<?php

namespace App\Filament\Resources\ComponentsResource\Pages;

use App\Filament\Resources\ComponentsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditComponents extends EditRecord
{
    protected static string $resource = ComponentsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
