<?php

namespace App\Livewire;

use Auth;
use App\Models\Cart;
use App\Models\Plant;
use Livewire\Component;

class ShopPage extends Component
{
    public $plants = [];
    
    public function render()
    {
        return view('livewire.shop-page');
    }

    public function mount()
    {
        $this->plants = Plant::get();
    }

    public function addToCart($plant_id, $quantity = 1)
    {
        $cart = Cart::firstOrCreate([
            'user_id' => Auth::id()
        ]);

        $cart->items()->create([
            'plant_id' => $plant_id,
            'quantity' => $quantity
        ]);
    }
}
