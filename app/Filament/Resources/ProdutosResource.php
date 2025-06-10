<?php

namespace App\Filament\Resources;

use App\Enums\ProdutosTipos;
use App\Enums\Status;
use App\Filament\Resources\ProdutosResource\Pages;
use App\Models\Ingrediente;
use App\Models\Produto;
use Dom\Text;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProdutosResource extends Resource
{
    protected static ?string $model = Produto::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    protected static ?string $navigationGroup = 'Cadastro';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make('')
                            ->hiddenLabel()
                            ->schema([
                                //
                                TextInput::make('nome')
                                    ->label('Nome do Produto')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Digite o nome do produto'),
                                Select::make('tipo')
                                    ->label('Tipo de Produto')
                                    ->required()
                                    ->native(false)
                                    ->options(ProdutosTipos::class)
                                    ->placeholder('Selecione o tipo de produto'),
                                TextInput::make('preco_base')
                                    ->label('Preço Base')
                                    ->required()
                                    ->numeric()
                                    ->prefix('R$')
                                    ->placeholder('Digite o preço base do produto'),

                                RichEditor::make('descricao')
                                    ->label('Descrição do Produto')
                                    ->columnSpanFull()
                                    ->required()
                                    ->placeholder('Digite a descrição do produto'),
                            ])
                            ->columns(2),

                        Section::make('Imagem')
                            ->hiddenLabel()
                            ->schema([
                                //
                                FileUpload::make('imagem')
                                    ->label('Imagem do Produto')
                                    ->image()
                                    ->maxSize(1024)
                                    ->hiddenLabel()
                                    ->disk('public')
                                    ->directory('produtos')
                                    ->preserveFilenames()
                                    ->columnSpanFull(),
                            ])
                            ->columns(2),

                    ])
                    ->columnSpan(['lg' => 2]),

                Group::make()
                    ->schema([
                        //
                        Section::make('Status')
                            ->schema([
                                Select::make('situacao')
                                    ->label('Situação do Produto')
                                    ->required()
                                    ->native(false)
                                    ->options(Status::class)
                                    ->placeholder('Selecione a situação do produto'),
                            ]),
                        Section::make('Ingredientes')
                            ->schema([
                                Repeater::make('ingredienteProduto')
                                    ->label('')
                                    ->relationship()
                                    ->schema([
                                        Select::make('ingrediente_id')
                                            ->relationship('ingrediente', 'nome')
                                            ->native(false)
                                            ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                                            ->required(),

                                        Group::make()
                                            ->schema([
                                                TextInput::make('quantidade')
                                                    ->label('Quantidade')
                                                    ->required()
                                                    ->numeric()
                                                    ->placeholder('Digite a quantidade do ingrediente'),
                                                TextInput::make('gramatura')
                                                    ->label('Gramatura')
                                                    ->required()
                                                    ->numeric()
                                                    ->placeholder('Digite a gramatura do ingrediente'),
                                            ])->columns(2),
                                    ]),
                            ]),

                    ])
                    ->columnSpan(['lg' => 1]),




            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //

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
                TextColumn::make('situacao')
                    ->label('Situação')
                    ->sortable()
                    ->badge()
                    ->formatStateUsing(fn($state) => Status::from($state)->getLabel())
                    ->color(fn($state) => Status::from($state)->getColor())
                    ->icon(fn($state) => Status::from($state)->getIcon()),
                TextColumn::make('preco_base')
                    ->label('Preço Base')
                    ->money('BRL')
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProdutos::route('/'),
            'create' => Pages\CreateProdutos::route('/create'),
            'edit' => Pages\EditProdutos::route('/{record}/edit'),
        ];
    }
}
