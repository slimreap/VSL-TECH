<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Models\LaptopnPheriperals;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\LaptopnPheriperalsResource\Pages;
use App\Filament\Resources\LaptopnPheriperalsResource\RelationManagers;

class LaptopnPheriperalsResource extends Resource
{
    protected static ?string $model = LaptopnPheriperals::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('prod_name'),
                Fieldset::make('stock')
                ->relationship('stock')
                ->schema([
                TextInput::make('stock')->label("")->default(0),
                TextInput::make('category')->label("")->default('Laptop and Pheriperals')
                ]),
                SpatieMediaLibraryFileUpload::make('laptop')->collection('laptops'),
                Textarea::make('description'),
                TextInput::make('price'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('prod_name'),
                TextColumn::make('description'),
                TextColumn::make('price'),
                SpatieMediaLibraryImageColumn::make('laptop')->collection('laptops'),
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
            'index' => Pages\ListLaptopnPheriperals::route('/'),
            'create' => Pages\CreateLaptopnPheriperals::route('/create'),
            'edit' => Pages\EditLaptopnPheriperals::route('/{record}/edit'),
        ];
    }    
}
