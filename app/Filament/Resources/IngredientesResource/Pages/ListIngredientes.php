<?php

namespace App\Filament\Resources\IngredientesResource\Pages;

use App\Filament\Resources\IngredientesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIngredientes extends ListRecords
{
    protected static string $resource = IngredientesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Adicionar Ingrediente')
                ->icon('heroicon-o-plus'),
        ];
    }
}
