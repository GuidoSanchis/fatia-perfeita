<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum MesasStatus: string implements HasColor, HasIcon, HasLabel
{
    case Disponivel = 'disponivel';
    case Ocupada = 'ocupada';
    case Reservada = 'reservada';
    case Indisponivel = 'indisponivel';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Disponivel => 'Disponível',
            self::Ocupada => 'Ocupada',
            self::Reservada => 'Reservada',
            self::Indisponivel => 'Indisponível',
            default => $this
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Disponivel => 'success',
            self::Ocupada => 'danger',
            self::Reservada => 'warning',
            self::Indisponivel => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Disponivel => 'heroicon-s-check',
            self::Ocupada => 'heroicon-s-lock-closed',
            self::Reservada => 'heroicon-s-clock',
            self::Indisponivel => 'heroicon-o-exclamation-triangle',
        };
    }
}
