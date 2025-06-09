<?php

namespace App\Filament\Resources\ProdutosResource\Widgets;

use App\Models\Ingrediente;
use App\Models\Produto;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProdutosOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total de Produtos', Produto::count())
                ->color('success'),
            Stat::make('Total de Ingredientes', Ingrediente::count())
                ->color('success'),
        ];
    }
}
