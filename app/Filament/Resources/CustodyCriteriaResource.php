<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustodyCriteriaResource\Pages;
use App\Filament\Resources\CustodyCriteriaResource\RelationManagers;
use App\Models\Custody_criteria;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustodyCriteriaResource extends Resource
{
    protected static ?string $model = Custody_criteria::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('custody_criteria')
                    ->label('Custody Criteria')
                    ->required()
                    ->placeholder('Enter the custody criteria'),
                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->placeholder('Enter the description'),
                Forms\Components\Select::make('valide')
                    ->label('Valide')
                    ->options([
                        true => 'Yes',
                        false => 'false',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('custody_criteria')

                    ->searchable()
                    ->label('Custody Criteria'),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->label('Description'),
                Tables\Columns\TextColumn::make('valide')
                    ->label('Valide'),
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
            'index' => Pages\ListCustodyCriterias::route('/'),
            'create' => Pages\CreateCustodyCriteria::route('/create'),
            'edit' => Pages\EditCustodyCriteria::route('/{record}/edit'),
        ];
    }
}
