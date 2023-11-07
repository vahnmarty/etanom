<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;
use App\Models\Seedball;
use Filament\Tables\Table;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class CheckoutSuccess extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public Order $order;
    public $seedballs = [];

    public function render()
    {
        return view('livewire.order.checkout-success');
    }

    public function mount($code)
    {
        $this->order = Order::with('seedballs')->whereCode($code)->firstOrFail();
    }

    public function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->query(Seedball::where('order_id', $this->order->id))
            ->columns([
                TextColumn::make('code'),
                TextColumn::make('price')->money(),
                TextColumn::make('created_at')->dateTime()
            ]);
    }
}
