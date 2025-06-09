<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum ProdutosTipos: string implements HasColor, HasIcon, HasLabel
{
    case Rodizio = 'rodizio';
    case NaoRodizio = 'nao_rodizio';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Rodizio => 'Rodízio',
            self::NaoRodizio => 'Não Rodízio',
            default => $this
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Rodizio => 'success',
            self::NaoRodizio => 'primary',

        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Rodizio => 'heroicon-s-check',
            self::NaoRodizio => 'heroicon-s-lock-closed',
        };
    }
}
