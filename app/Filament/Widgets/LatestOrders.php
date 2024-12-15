<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(OrderResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('id')
                ->label('Order ID')
                ->searchable(),

                TextColumn::make('user.name')
                ->searchable(),

                TextColumn::make('grand_total')
                ->money('IDR'),

                TextColumn::make('status')
                ->badge()
                ->colors([
                    'info' => 'new',
                    'warning' => 'proses',
                    'success' => 'dikirim',
                    'danger' => 'dibatalkan',
                ])
                ->icons([
                    'heroicon-m-sparkles' => 'new',
                    'heroicon-m-arrow-path' => 'proses',
                    'heroicon-m-truck' => 'dikirim',
                    'heroicon-m-x-circle' => 'dibatalkan',
                ])
                ->iconPosition('before')
                ->sortable(),

                TextColumn::make(('payment_method'))
                ->sortable()
                ->searchable(),

                TextColumn::make('payment_status')
                ->sortable()
                ->badge()
                ->searchable(),

                TextColumn::make('created_at')
                ->label('Tanggal Order')
                ->dateTime()
            ])
            ->actions([
                Action::make('Lihat Orderan')
                ->url(fn (Order $record): string => OrderResource::getUrl('view', ['record' => $record]))
                ->icon('heroicon-m-eye')
                ->label('Lihat Orderan'),
            ]);
    }
}
