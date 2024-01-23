<?php

namespace App\Livewire;

use Livewire\Component;

class PlantTree extends Component
{
    public $trees_open = true;

    public $show_planter = true;

    public function render()
    {
        return view('livewire.plant-tree')->layout('layouts.guest');
    }

    public function select($tree)
    {
        $this->show_planter = true;
        $this->trees_open = false;
        //$this->loading = true;
    }
}
