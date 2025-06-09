<?php

namespace App\Filament\Resources;

use App\Enums\Status;
use App\Filament\Resources\IngredientesResource\Pages;
use App\Filament\Resources\IngredientesResource\RelationManagers;
use App\Models\Ingrediente;
use App\Models\Ingredientes;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IngredientesResource extends Resource
{
    protected static ?string $model = Ingrediente::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $navigationGroup = 'Cadastro';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('imagem')
                    ->label('Imagem')
                    ->image()
                    ->maxSize(1024)
                    ->disk('public')
                    ->directory('ingredientes')
                    ->preserveFilenames()
                    ->columnSpanFull(),
                    TextInput::make('nome')
                    ->label('Nome')
                    ->required()
                    ->maxLength(255),
                    Select::make('situacao')
                    ->label('Situação')
                    ->options(Status::class)
                    ->native(false)
                    ->default('ativo')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('imagem')
                    ->label('Imagem')
                    ->disk('public')
                    ->default('ingrediente.png')
                    ->size(50),
                TextColumn::make('nome')
                    ->label('Nome')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('situacao')
                    ->label('Situação')
                    ->badge()
                    ->sortable()
                    ->formatStateUsing(fn ($state) => Status::from($state)->getLabel())
                    ->color(fn ($state) => Status::from($state)->getColor())
                    ->icon(fn ($state) => Status::from($state)->getIcon())
                    ->searchable(),
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
            'index' => Pages\ListIngredientes::route('/'),
            'create' => Pages\CreateIngredientes::route('/create'),
            'edit' => Pages\EditIngredientes::route('/{record}/edit'),
        ];
    }
}
