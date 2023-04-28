<?php

namespace App\Filament\Resources\LaptopnPheriperalsResource\Pages;

use App\Filament\Resources\LaptopnPheriperalsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaptopnPheriperals extends ListRecords
{
    protected static string $resource = LaptopnPheriperalsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
