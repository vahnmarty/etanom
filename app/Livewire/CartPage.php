<?php

namespace App\Livewire;

use Livewire\Component;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;

class CartPage extends Component implements HasForms
{
    use InteractsWithForms;
    
    public ?array $data = [];
    
    public function mount(): void
    {
        $this->form->fill();
    }

    public function render()
    {
        return view('livewire.cart-page');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('amount'),
                Textarea::make('note')
            ])
            ->columns(2)
            ->statePath('data');
    }
}
