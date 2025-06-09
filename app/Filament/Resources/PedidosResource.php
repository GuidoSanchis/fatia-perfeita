<?php

namespace App\Filament\Resources;

use App\Enums\PedidosStatus;
use App\Enums\Status;
use App\Filament\Resources\PedidosResource\Pages;
use App\Filament\Resources\PedidosResource\RelationManagers;
use App\Filament\Resources\PedidosResource\RelationManagers\ProdutosRelationManager;
use App\Models\Pedido;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section as InfolistSection;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PedidosResource extends Resource
{
    protected static ?string $model = Pedido::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    protected static ?string $navigationGroup = 'Cadastro';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('codigo')
                    ->label('Código')
                    ->sortable(),
                TextColumn::make('mesa.numero')
                    ->label('Mesa')
                    ->sortable(),
                TextColumn::make('situacao')
                    ->label('Situação')
                    ->sortable()
                    ->badge()
                    ->formatStateUsing(fn($state) => PedidosStatus::from($state)->getLabel())
                    ->color(fn($state) => PedidosStatus::from($state)->getColor())
                    ->icon(fn($state) => PedidosStatus::from($state)->getIcon()),
                TextColumn::make('data')
                    ->label('Data')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist

            ->schema([
                InfolistSection::make('Pedido')
                    ->columns(3)
                    ->schema([
                        TextEntry::make('codigo')
                            ->label('Código'),
                        TextEntry::make('mesa.numero')
                            ->label('Mesa'),
                        TextEntry::make('situacao')
                            ->label('Situação')
                            ->badge()
                            ->formatStateUsing(fn($state) => PedidosStatus::from($state)->getLabel())
                            ->color(fn($state) => PedidosStatus::from($state)->getColor())
                            ->icon(fn($state) => PedidosStatus::from($state)->getIcon()),
                        TextEntry::make('created_at')
                            ->label('Criado em')
                            ->dateTime(fn($state) => $state->format('d/m/Y H:i:s')),
                        TextEntry::make('subtotal')
                            ->label('Subtotal'),
                        TextEntry::make('total')
                            ->label('Total'),

                    ]),
            ])->columns(3);
    }
    public static function getRelations(): array
    {
        return [
            ProdutosRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPedidos::route('/'),
            'create' => Pages\CreatePedidos::route('/create'),
            'view' => Pages\ViewPedidos::route('/{record}'),
            // 'edit' => Pages\EditPedidos::route('/{record}/edit'),
        ];
    }
}
