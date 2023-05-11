<?php

namespace App\Filament\Widgets;

use DateTime;
use App\Models\CustomerTransaction;
use Filament\Widgets\LineChartWidget;

class SalesChart extends LineChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getHeading(): string
    {
        return 'Monthly Sales';
    }
 
    protected function getData(): array
    {
        $monthlySales = [
            'Jan' => 0,
            'Feb' => 0,
            'Mar' => 0,
            'Apr' => 0,
            'May' => 0,
            'Jun' => 0,
            'Jul' => 0,
            'Aug' => 0,
            'Sep' => 0,
            'Oct' => 0,
            'Nov' => 0,
            'Dec' => 0,
        ];

        $transactions = CustomerTransaction::all();

        foreach($transactions as $transaction){
            if($transaction->payment === 'paid'){
                $payment_month = new DateTime($transaction->payment_date);
                $month = $payment_month->format('F');
                // dd($month);
                $amount = $transaction->total_amount;
                $monthlySales[$month] += $amount;
            }
        }

        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [$monthlySales['Jan'], $monthlySales['Feb'], $monthlySales['Mar'], $monthlySales['Apr'], $monthlySales['May'], $monthlySales['Jun'], $monthlySales['Jul'], $monthlySales['Aug'], $monthlySales['Sep'], $monthlySales['Oct'], $monthlySales['Nov'], $monthlySales['Dec']],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }
}
