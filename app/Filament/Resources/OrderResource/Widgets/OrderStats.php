<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Support\Number;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number as SupportNumber;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Orders', Order::query()->where('status', 'new')->count()),
            Stat::make('Orderan Diproses', Order::query()->where('status', 'proses')->count()),
            Stat::make('Orderan Diantarkan', Order::query()->where('status', 'dikirim')->count()),
            Stat::make('Rata Rata Harga', SupportNumber::currency(Order::query()->avg('grand_total'), 'IDR'))
        ];
    }
}
