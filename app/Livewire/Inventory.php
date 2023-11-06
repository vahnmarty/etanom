<?php
 
namespace App\Livewire;
 
use App\Models\Order;
use Livewire\Component;
use App\Models\Seedball;
use Filament\Tables\Table;
use App\Models\Shop\Product;
use Illuminate\Contracts\View\View;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;
 
class Inventory extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    
    public function table(Table $table): Table
    {
        return $table
            ->query(Seedball::latest())
            ->columns([
                TextColumn::make('short_code')
                    ->label('Code')
                    ->badge()
                    ->color('info')
                    ->formatStateUsing(fn (Seedball $record): string => $record->short_code),
                TextColumn::make('status'),
                TextColumn::make('price'),
                TextColumn::make('created_at')
                    ->label('Date Created')
                    ->dateTime()
            ])
            ->filters([
                // ...
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }
    
    public function render(): View
    {
        return view('livewire.inventory');
    }
}