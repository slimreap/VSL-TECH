<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use App\Models\CustomerTransaction;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CustomerTransactionResource\Pages;
use App\Filament\Resources\CustomerTransactionResource\RelationManagers;

class CustomerTransactionResource extends Resource
{
    protected static ?string $model = CustomerTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    TextColumn::make('customerdetails.name'),
                    TextColumn::make('transactionable.brand_name'),
                    TextColumn::make('transactionable.price'),

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
            // RelationManagers\TransactionableRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomerTransactions::route('/'),
            'create' => Pages\CreateCustomerTransaction::route('/create'),
            'edit' => Pages\EditCustomerTransaction::route('/{record}/edit'),
        ];
    }    
}
