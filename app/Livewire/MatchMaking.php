<?php

namespace App\Livewire;

use Auth;
use App\Models\Cart;
use App\Models\User;
use Livewire\Component;

class MatchMaking extends Component
{
    public $planters, $cart;

    public function render()
    {
        return view('livewire.match-making');
    }

    public function mount()
    {
        $this->planters = User::planters()->get();
        $this->cart = Cart::firstOrCreate(['user_id' => Auth::id()]);
    }
}
