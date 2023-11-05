<?php

namespace App\Livewire;

use Closure;
use App\Models\Order;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Livewire\Component;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;

class ShopSeedballs extends Component implements HasForms
{
    use InteractsWithForms;

    public $amount = 1, $subtotal = 2;

    public $coupon, $location, $tree;

    public $price;
    
    public function render()
    {
        return view('livewire.shop-seedballs');
    }

    public function mount()
    {
        $this->price = config('settings.seedball.price');
        $this->form->fill([
            'subtotal' => $this->amount * $this->price
        ]);
    }

    public function getFormSchema()
    {
        return [
            TextInput::make('amount')
                ->default(1)
                ->numeric()
                ->maxValue(100)
                ->minValue(1)
                ->afterStateUpdated(function(Get $get, Set $set, ?string $old, ?int $state){
                    $state = (int) $state;
                    $set('subtotal', $state * $this->price, 2);
                })
                ->extraAttributes(['class' => 'text-center'])
                ->helperText('1 tons is like 2,476 miles driven in an average car')
                ->live(),
            TextInput::make('subtotal')
                ->disabled()
                ->numeric()
                ->dehydrated(fn ($state) => number_format($state, 2))
                ->live(),
            TextInput::make('coupon')
                ->hidden()
                ->disabled()
                ->live(),
            Fieldset::make('Coming soon')
                ->schema([
                    Select::make('location')
                        ->label('Select Location')
                        ->disabled(),
                    Select::make('tree')
                        ->label('Select Tree')
                        ->disabled(),
                ])
        ];
    }

    public function order()
    {
        $data = $this->form->getState();

        $order = $this->createOrder($data);

        return redirect()->route('order.checkout', $order->code);
    }

    public function createOrder(array $data)
    {
        $order = new Order;
        $order->code = Order::generateCode();
        $order->user_id = auth()->id();
        $order->amount = $data['amount'];
        $order->subtotal = $data['subtotal'];
        $order->total = $data['subtotal'];
        $order->save();

        return $order;
    }
}
