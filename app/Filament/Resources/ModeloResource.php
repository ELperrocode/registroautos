<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ModeloResource\Pages;
use App\Filament\Resources\ModeloResource\RelationManagers;
use App\Models\Marca;
use App\Models\Modelo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ModeloResource extends Resource
{
    protected static ?string $model = Modelo::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre_modelo')
                    ->required()
                    ->maxLength(50)
                    ->unique('modelos', 'nombre_modelo'),
                Forms\Components\Select::make('marca_id')
                    ->required()
                    ->relationship('marca', 'nombre_marca')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('nombre_modelo')
                ->searchable(),
            Tables\Columns\TextColumn::make('marca.nombre_marca') 
                ->label('Nombre de la Marca')
                ->sortable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListModelos::route('/'),
            'create' => Pages\CreateModelo::route('/create'),
            'edit' => Pages\EditModelo::route('/{record}/edit'),
        ];
    }
}
