<?php

namespace App\Filament\Resources\OrderResource\Pages;

use Filament\Actions;
use App\Filament\Resources\OrderResource;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            OrderStats::class
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('Semua'),
            'new' => Tab::make()->query(fn($query) => $query->where('status', 'new')),
            'proses' => Tab::make()->query(fn($query) => $query->where('status', 'proses')),
            'dikirim' => Tab::make()->query(fn($query) => $query->where('status', 'dikirim')),
            'dibatalkan' => Tab::make()->query(fn($query) => $query->where('status', 'dibatalkan')),
        ];
    }
}