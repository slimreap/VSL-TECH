<?php

namespace App\Filament\Resources;

use App\Notifications\SendTrackingNo;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Ixudra\Curl\Facades\Curl;
use Filament\Resources\Resource;
use App\Models\CustomerTransaction;
use Filament\Forms\Components\Select;

use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CustomerTransactionResource\Pages;
use App\Filament\Resources\CustomerTransactionResource\RelationManagers;
use App\Models\CustomerDetails;

class CustomerTransactionResource extends Resource
{
    protected static ?string $model = CustomerTransaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('customerdetails.name'),
                TextInput::make('transactionable.name'),
               
                TextInput::make('payment'),
                TextInput::make('tracking_number'),
                TextInput::make('total_amount'),
                TextInput::make('quantity'),
                Select::make('delivery_status')
                ->options([
                    'pending' => 'Pending',
                    'rejected' => 'Rejected',
                    'ready' => 'Ready',
                    'pick-up' => 'Pick-up',
                    'in-transit' => 'In-transit',
                    'out-for-delivery' => 'Out-for-delivery',
                    'recieved' => 'Recieved',
                    
                ])->afterStateUpdated(function($record){
                    $record->delivery_date = Carbon::now();

                }),
                Select::make('order_status')
                ->options([
                    'pending' => 'Pending',
                    'waiting-payment' => 'Waiting-payment',
                    'cancelled' => 'Cancelled',
                    'refund' => 'Refund',
                    'completed' => 'Completed',
                ]),


        ]);
    }
  
    public static function table(Table $table): Table
    {
     $count = 1;
     $callback = function ($record) {

            
           $record->delivery_date = Carbon::now();
        };
        return $table
            ->columns([
                    TextColumn::make('customerdetails.name')->label('Customer name'),
                    TextColumn::make('transactionable.name'),
                    TextColumn::make('customerdetails.email'),
                    TextColumn::make('payment')->getStateUsing(function($record){
                        $payment_link = $record->payment_link;

                        $key = 'sk_test_646DMYvwqigghxvnzfJpJXVh:';
                        $key = base64_encode($key);
                        $response = Curl::to('https://api.paymongo.com/v1/links/'.$payment_link)
                                    ->withHeader('Content-Type: application/json')
                                    ->withHeader('accept: application/json')
                                    ->withHeader('Authorization: Basic '. $key .'')
                                    ->asJson()
                                    ->get();
                 
                        if(isset($response->data->attributes->payments[0]->data->attributes->paid_at))
                        {
                            $paidAt = $response->data->attributes->payments[0]->data->attributes->paid_at;
                            $paidAt = Carbon::createFromTimestamp($paidAt);
                            $record->payment_date = $paidAt;
                        }

                    
                        $status = $response->data->attributes->status;
                        $record->payment = $status;
                        
                        $record->save();

                        return $status;

                    }),
                    TextColumn::make('tracking_number'),
                    TextColumn::make('total_amount'),
                    TextColumn::make('quantity'),
                    // ViewColumn::make('delivery_status')->view('tables.columns.delivery-status-updater'),
                    SelectColumn::make('delivery_status')
                    ->options([
                        'pending' => 'Pending',
                        'rejected' => 'Rejected',
                        'ready' => 'Ready',
                        'pick-up' => 'Pick-up',
                        'in-transit' => 'In-transit',
                        'out-for-delivery' => 'Out-for-delivery',
                        'recieved' => 'Recieved',
                    ])->default('pending'),
                    TextColumn::make('delivery_date'),
                    SelectColumn::make('order_status')
                    ->options([
                        'pending' => 'Pending',
                        'accepted' => 'Accepted',
                        'waiting-payment' => 'Waiting-payment',
                        'cancelled' => 'Cancelled',
                        'refund' => 'Refund',
                        'completed' => 'Completed',
                    ])->updateStateUsing(function($record){
                        $data = $record->order_status = 'pending';
                        $record->save();

                        return $data;
                    }),
                    TextColumn::make('created_at')->label('Date Ordered'),





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
