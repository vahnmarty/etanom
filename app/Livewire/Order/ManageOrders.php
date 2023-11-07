<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class ManageOrders extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    
    public function render()
    {
        return view('livewire.order.manage-orders');
    }

    public function mount()
    {

    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Order::where('user_id', auth()->id()))
            ->columns([
                TextColumn::make('code')
                    ->label('Transaction ID'),
                TextColumn::make('amount')
                    ->formatStateUsing(fn (string $state): string => 'Seedballs x' .$state),
                TextColumn::make('total')->money(),
                BadgeColumn::make('paid_at')
                    ->label('Status')
                    ->formatStateUsing(fn ($state) => $state ? 'PAID' : ''),
                TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                // ...
            ])
            ->actions([
                Action::make('view')
                    ->url(fn(Order $record) => route('orders.checkout-successful', $record->code))
                    ->visible(fn(Order $record) => $record->isPaid()),
                Action::make('checkout')
                    ->url(fn(Order $record) => route('orders.checkout', $record->code))
                    ->visible(fn(Order $record) => !$record->isPaid()),
            ])
            ->bulkActions([
                // ...
            ]);
    }
}
