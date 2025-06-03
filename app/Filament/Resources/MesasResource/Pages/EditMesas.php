<?php

namespace App\Filament\Resources\MesasResource\Pages;

use App\Filament\Resources\MesasResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditMesas extends EditRecord
{
    protected static string $resource = MesasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->label('Excluir Mesa')->icon('heroicon-o-trash'),
        ];
    }

    protected function getSaveFormAction(): Action
    {
        return Action::make('save')
            ->label('Salvar Mudanças')
            ->submit('save')
            ->keyBindings(['mod+s']);
    }

}
