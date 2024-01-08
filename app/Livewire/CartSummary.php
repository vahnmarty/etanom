<?php

namespace App\Livewire;

use Auth;

use App\Models\Cart;
use Livewire\Component;

class CartSummary extends Component
{
    public $cart;
    
    public function render()
    {
        return view('livewire.cart-summary');
    }

    public function mount()
    {
        $cart = Cart::with('items.plant')->firstOrCreate(['user_id' => Auth::id()]);
        $this->cart = $cart;
    }
}
