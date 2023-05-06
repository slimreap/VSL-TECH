<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use App\Models\PC_components;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ComponentsResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\ComponentsResource\RelationManagers;

class ComponentsResource extends Resource
{
    protected static ?string $model = PC_components::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('component'),
                TextInput::make('name'),
                TextInput::make('product_model'),
                Fieldset::make('stock')
                ->relationship('stock')
                ->schema([
                TextInput::make('stock')->label("")->default(0),
                TextInput::make('category')->label("")->default('PC Components')
                ]),
                SpatieMediaLibraryFileUpload::make('PC_component')->collection('PC_Components'),
                Textarea::make('description'),
                TextInput::make('price'),

                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('component'),
                TextColumn::make('name'),
                TextColumn::make('product_model'),
                TextColumn::make('description'),
                TextColumn::make('price'),
                SpatieMediaLibraryImageColumn::make('PC_component')->collection('PC_Components'),
                
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
            'index' => Pages\ListComponents::route('/'),
            'create' => Pages\CreateComponents::route('/create'),
            'edit' => Pages\EditComponents::route('/{record}/edit'),
        ];
    }    
}
