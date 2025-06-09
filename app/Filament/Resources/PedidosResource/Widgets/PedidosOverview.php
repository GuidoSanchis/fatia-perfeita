<?php

namespace App\Filament\Resources\PedidosResource\Widgets;

use App\Models\Pedido;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PedidosOverview extends BaseWidget
{

    protected int | string | array $columnSpan = 'full';

    protected function getColumns(): int
    {
        return 2;
    }

    protected function getStats(): array
    {
        return [
            //
            Stat::make('Pedidos', Pedido::count()),
            Stat::make('Pedidos em Andamento', Pedido::where('situacao', 'em_andamento')->count()),

        ];
    }
}
