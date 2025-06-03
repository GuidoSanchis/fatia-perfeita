<?php

namespace App\Filament\Resources\MesasResource\Pages;

use App\Filament\Resources\MesasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMesas extends ListRecords
{
    protected static string $resource = MesasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Adicionar Mesa')->icon('heroicon-o-plus'),
        ];
    }
}
