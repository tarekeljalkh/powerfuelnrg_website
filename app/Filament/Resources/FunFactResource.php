<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FunFactResource\Pages;
use App\Models\FunFact;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class FunFactResource extends Resource
{
    protected static ?string $model = FunFact::class;

    protected static ?int $navigationSort = 4;
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('icon')
                    ->label('Flaticon/Icon Class')
                    ->placeholder('e.g. flaticon-robotic')
                    ->required(),
                TextInput::make('title')->required(),
                TextInput::make('count')->numeric()->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('icon')->label('Icon Class'),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('count')->sortable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFunFacts::route('/'),
            'create' => Pages\CreateFunFact::route('/create'),
            'edit' => Pages\EditFunFact::route('/{record}/edit'),
        ];
    }
}
