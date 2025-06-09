<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum PedidosStatus: string implements HasColor, HasIcon, HasLabel
{
    case Novo = 'novo';
    case EmAndamento = 'em_andamento';
    case Concluido = 'concluido';
    case Cancelado = 'cancelado';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Novo => 'Novo',
            self::EmAndamento => 'Em Andamento',
            self::Concluido => 'Concluído',
            self::Cancelado => 'Cancelado',
            default => $this
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Novo => 'success',
            self::EmAndamento => 'primary',
            self::Concluido => 'success',
            self::Cancelado => 'danger',

        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Novo => 'heroicon-s-check',
            self::EmAndamento => 'heroicon-s-lock-closed',
            self::Concluido => 'heroicon-s-check',
            self::Cancelado => 'heroicon-s-x-mark',
        };
    }
}
