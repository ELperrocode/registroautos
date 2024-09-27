<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropietarioResource\Pages;
use App\Filament\Resources\PropietarioResource\RelationManagers;
use App\Models\Propietario;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PropietarioResource extends Resource
{
    protected static ?string $model = Propietario::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'Propietarios';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->regex('/^[a-zA-Z]+$/', 'El nombre solo puede contener letras.')
                    ->required()
                    ->maxLength(25),
                Forms\Components\TextInput::make('apellido')
                    ->regex('/^[a-zA-Z]+$/', 'El nombre solo puede contener letras.')
                    ->required()
                    ->maxLength(25),
                Forms\Components\TextInput::make('telefono')
                    ->required()
                    ->tel()
                    ->maxLength(25),
                Forms\Components\TextInput::make('direccion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('tipo')
                    ->options([
                        'natural' => 'Natural',
                        'juridico' => 'Jurídico',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('cip')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(25),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('apellido')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('telefono')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('direccion')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tipo')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('cip')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
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
            'index' => Pages\ListPropietarios::route('/'),
            'create' => Pages\CreatePropietario::route('/create'),
            'edit' => Pages\EditPropietario::route('/{record}/edit'),
        ];
    }
}
