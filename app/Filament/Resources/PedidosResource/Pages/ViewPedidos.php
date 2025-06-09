<?php

namespace App\Filament\Resources\PedidosResource\Pages;

use App\Enums\PedidosStatus;
use App\Filament\Resources\PedidosResource;
use App\Models\Pedido;
use Filament\Actions;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;

class ViewPedidos extends ViewRecord
{
    protected static string $resource = PedidosResource::class;

    protected function getHeaderActions(): array
    {
        return [
              Actions\Action::make('Alterar Status')->label('Alterar Status')->icon('heroicon-m-arrows-right-left')->form([
                Select::make('situacao')
                    ->native(false)
                    ->options(PedidosStatus::class)
                    ->preload()
                    ->searchable()
                    ->required()
                    ->default(fn(Pedido $record) => $record->situacao),
            ])->action(function (array $data, Pedido $record) {

                try {
                    $record->update(['situacao' => $data['situacao']]);

                    return
                        Notification::make()
                        ->title('Status Atualizado com Sucesso')
                        ->success()
                        ->send();
                } catch (\Throwable $th) {
                    return Notification::make()
                        ->title('Error')
                        ->danger()
                        ->send();
                }
            }),
        ];
    }
}
