<?php

namespace App\Filament\Resources;

use App\Enums\MesasStatus;
use App\Filament\Resources\MesasResource\Pages;
use App\Filament\Resources\MesasResource\RelationManagers;
use App\Models\Mesa;
use App\Models\Mesas;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MesasResource extends Resource
{
    protected static ?string $model = Mesa::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationGroup = 'Cadastro';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('numero')
                    ->label('Número da Mesa')
                    ->required()
                    ->maxLength(255)
                    ->numeric()
                    ->placeholder('Digite o número da mesa'),
                Select::make('situacao')
                    ->label('Situação da Mesa')
                    ->required()
                    ->placeholder('Selecione a situação da mesa')
                    ->native(false)
                    ->options(MesasStatus::class)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('numero')
                    ->label('Número da Mesa')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('situacao')
                    ->label('Situação da Mesa')
                    ->badge()
                    ->sortable()
                    ->formatStateUsing(fn ($state) => MesasStatus::from($state)->getLabel())
                    ->color(fn ($state) => MesasStatus::from($state)->getColor())
                    ->icon(fn ($state) => MesasStatus::from($state)->getIcon())
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Editar')->icon('heroicon-o-pencil-square'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Excluir')->icon('heroicon-o-trash'),
                ])->label('Ações em Massa')->icon('heroicon-o-ellipsis-horizontal'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMesas::route('/'),
            'create' => Pages\CreateMesas::route('/create'),
            'edit' => Pages\EditMesas::route('/{record}/edit'),
        ];
    }
}
