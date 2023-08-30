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
                TextInput::make('amount')
                    ->default(1)
                    ->helperText('1 tons is like 2,476 miles driven in an average car')
                    ->required(),
                Textarea::make('note')
                    ->placeholder('Leave an optional note')
            ])
            ->columns(1)
            ->statePath('data');
    }

    public function create()
    {
        $data = $this->form->getState();
    }
}
