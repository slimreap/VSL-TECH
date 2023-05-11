<?php

namespace App\Filament\Widgets;

use App\Models\CustomerTransaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class OrderStatistics extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Unique views', CustomerTransaction::all()->count())
            ->label('Total Orders'),
            Card::make('Unique views', CustomerTransaction::where('order_status','completed')->count())
            ->label('Orders Delivered'),
            Card::make('Unique views', CustomerTransaction::where('order_status','pending')->count())
            ->label('Orders Pending'),

        ];
    }
}
