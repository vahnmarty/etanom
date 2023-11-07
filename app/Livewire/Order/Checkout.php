<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;
use App\Models\Seedball;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;

class Checkout extends Component implements HasForms
{
    use InteractsWithForms;
    
    public Order $order;

    public function render()
    {
        return view('livewire.order.checkout');
    }

    public function mount($code)
    {
        $this->order = Order::whereCode($code)->firstOrFail();
    }

    public function checkout()
    {
        $order = $this->order;
        $order->paid_at = now();
        $order->save();

        $this->createSeedballs($order);

        return redirect('inventory');
    }

    public function createSeedballs(Order $order)
    {
        for($i = 0; $i < $order->amount; $i++)
        {
            $seedball = new Seedball;
            $seedball->code = Seedball::generateCode();
            $seedball->order_id = $order->id;
            $seedball->user_id = auth()->id();
            $seedball->price = config('settings.seedball.price');
            $seedball->save();
        }
        
    }
}
