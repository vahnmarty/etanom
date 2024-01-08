<?php

namespace App\Livewire\Planter;

use Auth;
use App\Models\Plant;
use Livewire\Component;
use Filament\Tables\Table;
use App\Models\PlantInventory;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\CreateAction;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class PlanterInventory extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    
    public function render()
    {
        return view('livewire.planter.planter-inventory')
            ->layout('components.layouts.planter');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(PlantInventory::fromUser())
            ->columns([
                TextColumn::make('plant.name'),
                TextColumn::make('quantity'),
                TextColumn::make('price'),
                TextColumn::make('created_at')
                    ->label('Date Created')
                    ->dateTime()
            ])
            ->filters([
                // ...
            ])
            ->headerActions([
                CreateAction::make()
                    ->label('Add Plant')
                    ->form([
                        Select::make('plant_id')
                            ->label('Plant')
                            ->options(Plant::query()->pluck('name', 'id'))
                            ->required(),
                        TextInput::make('quantity')
                            ->label('Stock Onhand')
                            ->required()
                            ->minValue(1),
                        TextInput::make('price')
                            ->label('Price')
                            ->required()
                    ])
                    ->action(function (array $data): void {
                        $inventory = new PlantInventory;
                        $inventory->user_id = Auth::id();
                        $inventory->fill($data);
                        $inventory->save();
                    })
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }
}
