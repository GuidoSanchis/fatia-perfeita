<?php

namespace App\Filament\Resources\PedidosResource\RelationManagers;

use App\Enums\ProdutosTipos;
use App\Enums\Status;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProdutosRelationManager extends RelationManager
{
    protected static string $relationship = 'produtos';

    // public function form(Form $form): Form
    // {
    //     // return $form
    //     //     ->schema([
    //     //         Forms\Components\TextInput::make('title')
    //     //             ->required()
    //     //             ->maxLength(255),
    //     //     ]);
    // }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('quantidade')
                    ->label('Quantidade')
                    ->sortable(),
                ImageColumn::make('imagem')
                    ->label('Imagem')
                    ->disk('public'),
                TextColumn::make('nome')
                    ->label('Nome')
                    ->sortable(),
                TextColumn::make('tipo')
                    ->label('Tipo')
                    ->sortable()
                    ->badge()
                    ->formatStateUsing(fn($state) => ProdutosTipos::from($state)->getLabel())
                    ->color(fn($state) => ProdutosTipos::from($state)->getColor())
                    ->icon(fn($state) => ProdutosTipos::from($state)->getIcon()),
                TextColumn::make('preco')
                    ->label('Preço ')
                    ->money('BRL')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
