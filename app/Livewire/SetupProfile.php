<?php

namespace App\Livewire;

use Livewire\Component;

class SetupProfile extends Component
{
    public $step = 2;

    public function render()
    {
        return view('livewire.setup-profile')
            ->layout('components.layouts.setup');
    }

    public function next($step)
    {
        $this->step = $step;
    }

    public function checkout()
    {
        $this->step = 3;
    }
}
