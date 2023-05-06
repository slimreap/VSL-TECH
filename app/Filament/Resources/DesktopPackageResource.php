<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\DesktopPackage;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DesktopPackageResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\DesktopPackageResource\RelationManagers;

class DesktopPackageResource extends Resource
{
    protected static ?string $model = DesktopPackage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('price'),
                Fieldset::make('stock')
                ->relationship('stock')
                ->schema([
                TextInput::make('stock')->label("")->default(0),
                TextInput::make('category')->label("")->default('Desktop'),
                ]),
                SpatieMediaLibraryFileUpload::make('desktop')->collection('desktop'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('price'),
                SpatieMediaLibraryImageColumn::make('desktop')->collection('desktop'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDesktopPackages::route('/'),
            'create' => Pages\CreateDesktopPackage::route('/create'),
            'edit' => Pages\EditDesktopPackage::route('/{record}/edit'),
        ];
    }    
}
