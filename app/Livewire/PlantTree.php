<?php

namespace App\Livewire;

use Livewire\Component;

class PlantTree extends Component
{
    public $show_trees = true, $show_planter = false, $show_cart = false;

    public $plant, $planter, $quantity = 1;

    public function render()
    {
        return view('livewire.plant-tree')->layout('layouts.guest');
    }

    public function selectTree($tree)
    {
        $this->show_planter = true;
        $this->show_trees = false;
        $this->plant = $tree;
    }

    public function selectPlanter($planter)
    {
        $this->show_planter = false;
        $this->show_trees = false;
        $this->show_cart = true;
        $this->planter = $planter;
    }
}
