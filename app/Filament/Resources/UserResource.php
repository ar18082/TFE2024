<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $label = 'utilisateurs';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'User';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('email_verified_at'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('fistname')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('phoneNumber')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('addressStreet')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('addressNumber')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('roleAdmin')
                    ->required(),
                Forms\Components\Toggle::make('roleSuperAdmin')
                    ->required(),
                Forms\Components\Toggle::make('roleParent')
                    ->required(),
                Forms\Components\Toggle::make('roleBabySitter')
                    ->required(),
                Forms\Components\TextInput::make('unsucessefulAttempt')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('banned')
                    ->required(),
                Forms\Components\Toggle::make('inscriptConf')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fistname')
                    ->label('Prénom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('E-mail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phoneNumber')
                    ->label('Téléphone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('addressStreet')
                    ->label('Rue')
                    ->searchable(),
                Tables\Columns\TextColumn::make('addressNumber')
                    ->label('Numéro')
                    ->searchable(),
                Tables\Columns\IconColumn::make('roleAdmin')
                    ->boolean(),
                Tables\Columns\IconColumn::make('roleSuperAdmin')
                    ->boolean(),
                Tables\Columns\TextColumn::make('unsucessefulAttempt')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('banned')
                    ->boolean(),
                Tables\Columns\IconColumn::make('inscriptConf')
                    ->boolean(),
            ])
            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
