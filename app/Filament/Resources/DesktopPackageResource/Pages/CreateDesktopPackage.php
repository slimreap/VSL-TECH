<?php

namespace App\Filament\Resources\DesktopPackageResource\Pages;

use App\Filament\Resources\DesktopPackageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateDesktopPackage extends CreateRecord
{
    protected static string $resource = DesktopPackageResource::class;


}
