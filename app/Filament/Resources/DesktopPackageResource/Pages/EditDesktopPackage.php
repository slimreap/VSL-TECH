<?php

namespace App\Filament\Resources\DesktopPackageResource\Pages;

use App\Filament\Resources\DesktopPackageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDesktopPackage extends EditRecord
{
    protected static string $resource = DesktopPackageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
