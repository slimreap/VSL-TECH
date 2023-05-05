<?php

namespace App\Filament\Resources\DesktopPackageResource\Pages;

use App\Filament\Resources\DesktopPackageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDesktopPackages extends ListRecords
{
    protected static string $resource = DesktopPackageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
