<?php

namespace App\Filament\Resources\LaptopnPheriperalsResource\Pages;

use App\Filament\Resources\LaptopnPheriperalsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaptopnPheriperals extends EditRecord
{
    protected static string $resource = LaptopnPheriperalsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
