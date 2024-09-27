<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehiculoResource\Pages;
use App\Filament\Resources\VehiculoResource\RelationManagers;
use App\Models\Vehiculo;
use App\Models\Modelo;
use App\Models\Marca;
use App\Models\TipoVehiculo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Resources\Console;
use Filament\Tables;
use Filament\Tables\Table;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use App\Models\Propietario;


class VehiculoResource extends Resource
{
    protected static ?string $model = Vehiculo::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationGroup = 'Vehiculos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('placa')
                    ->label('Placa')
                    ->required()
                    ->maxLength(10)
                    ->unique(ignoreRecord: true),

                Forms\Components\Select::make('marca_id')
                    ->label('Marca')
                    ->relationship('marca', 'nombre_marca')
                    ->searchable()
                    ->preload()
                    ->reactive()
                    ->afterStateUpdated(function ($state, $set) {
                        $set('modelo_id', null);
                        $set('tipo_vehiculo_id', null); 
                    }),

                Forms\Components\Select::make('modelo_id')
                    ->label('Modelo')
                    ->required()
                    ->options(function ($get) {
                        $marcaId = $get('marca_id');
                        return $marcaId ? Modelo::where('marca_id', $marcaId)->pluck('nombre_modelo', 'id_modelo') : [];
                    })
                    ->searchable()->preload()->reactive()
                    ->afterStateUpdated(function ($state, $set) {
                        $modelo = Modelo::find($state);
                        $set('tipo_vehiculo_id', $modelo ? $modelo->tipo_id : null);
                    }),
             

                Forms\Components\Select::make('color_id')
                    ->required()
                    ->relationship('color', 'nombre_color')
                    ->searchable()
                    ->preload(),

                Forms\Components\Select::make('tipo_vehiculo_id')
                    ->label('Tipo de Vehículo')
                    ->disabled()
                    ->relationship('tipoVehiculo', 'nombre_tipo')
                    ->searchable()
                    ->preload(),

                Forms\Components\TextInput::make('anio')
                    ->required()
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(date('Y'))
                    ->maxLength(4)
                    ->label('Año'),

                Forms\Components\TextInput::make('numero_motor')
                    ->required()
                    ->maxLength(50)
                    ->label('Número de Motor')
                    ->unique(ignoreRecord: true),

                Forms\Components\TextInput::make('numero_chasis')
                    ->required()
                    ->maxLength(50)
                    ->label('Número de Chasis')
                    ->unique(ignoreRecord: true),

                Forms\Components\Select::make('propietario_id')
                    ->label('Propietario')
                    ->relationship('propietario', 'cip')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('nombre')
                            ->required()
                            ->maxLength(25),
                        Forms\Components\TextInput::make('apellido')
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
                    ])
                    ->label('Seleccionar o crear  propietario'),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('placa')->label('Placa')->searchable(),
                Tables\Columns\TextColumn::make('marca.nombre_marca')->label('Marca')->searchable(),
                Tables\Columns\TextColumn::make('modelo.nombre_modelo')->label('Modelo')->searchable(),
                Tables\Columns\TextColumn::make('color.nombre_color')->label('Color')->searchable(),
                Tables\Columns\TextColumn::make('anio')->label('Año')->sortable(),
                Tables\Columns\TextColumn::make('numero_motor')->label('Número de Motor'),
                Tables\Columns\TextColumn::make('numero_chasis')->label('Número de Chasis'),
                Tables\Columns\TextColumn::make('propietario.nombre')->label('Propietario'),
                Tables\Columns\TextColumn::make('propietario.apellido')->label('Apellido'),
                Tables\Columns\TextColumn::make('propietario.cip')->label('CIP'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListVehiculos::route('/'),
            'create' => Pages\CreateVehiculo::route('/create'),
            'edit' => Pages\EditVehiculo::route('/{record}/edit'),
        ];
    }
}
