<?php

namespace App\Filament\Resources\ComponentsResource\Pages;

use App\Filament\Resources\ComponentsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListComponents extends ListRecords
{
    protected static string $resource = ComponentsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
