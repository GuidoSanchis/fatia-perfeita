<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum Status: string implements HasColor, HasIcon, HasLabel
{
    case Ativo = 'ativo';
    case Inativo = 'inativo';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Ativo => 'Ativo',
            self::Inativo => 'Inativo',
            default => $this
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Ativo => 'success',
            self::Inativo => 'danger',

        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Ativo => 'heroicon-s-check',
            self::Inativo => 'heroicon-s-x-mark',
        };
    }
}
