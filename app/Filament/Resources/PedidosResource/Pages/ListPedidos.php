<?php

namespace App\Filament\Resources\PedidosResource\Pages;

use App\Filament\Resources\PedidosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;

class ListPedidos extends ListRecords
{
    protected static string $resource = PedidosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            PedidosResource\Widgets\PedidosOverview::class,
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('Todos'),
            'novo' => Tab::make()->query(fn ($query) => $query->where('situacao', 'novo')),
            'em_andamento' => Tab::make()->query(fn ($query) => $query->where('situacao', 'em_andamento')),
            'concluido' => Tab::make()->query(fn ($query) => $query->where('situacao', 'concluido')),
            'cancelado' => Tab::make()->query(fn ($query) => $query->where('situacao', 'cancelado')),
        ];
    }
}
