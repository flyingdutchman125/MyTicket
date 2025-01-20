<?php

namespace App\Filament\Resources\BookingTransactionResource\Widgets;

use App\Models\booking_transaction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookingTransactionStats extends BaseWidget
{
    protected function getStats(): array
    {
        $totalTransactions = booking_transaction::count();
        $approvedTransaction = booking_transaction::where('is_paid', true)->count();
        $totalRevenue = booking_transaction::where('is_paid', true)->sum('total_amount');
        return [
            //
            Stat::make('Total Transaction', $totalTransactions)
                ->description('All Transaction')
                ->descriptionIcon('heroicon-o-currency-dollar'),
            Stat::make('Approved Transaction', $approvedTransaction)
                ->description('Approved Transaction')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('Total Revenue', 'IDR' . number_format($totalRevenue))
                ->description('Revenue from approved transactions')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }
}
