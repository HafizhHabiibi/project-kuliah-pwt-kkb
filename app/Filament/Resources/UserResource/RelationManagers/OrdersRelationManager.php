<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrdersRelationManager extends RelationManager
{
    protected static string $relationship = 'orders';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('id')
                //     ->required()
                //     ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                TextColumn::make('id')
                ->label('Order ID')
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

            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Action::make('Lihat Order')
                ->label('Lihat Orderan')
                ->url(fn (Order $record):string => OrderResource::getUrl('view', ['record' => $record]))
                ->color('info')
                ->icon('heroicon-o-eye'),

                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
