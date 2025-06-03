<?php

namespace App\Filament\Resources\IngredientesResource\Pages;

use App\Filament\Resources\IngredientesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIngredientes extends EditRecord
{
    protected static string $resource = IngredientesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('Excluir Ingrediente')
                ->icon('heroicon-o-trash')
                ->color('danger'),
        ];
    }
}
