<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromoBannerResource\Pages;
use App\Models\PromoBanner;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class PromoBannerResource extends Resource
{
    protected static ?string $model = PromoBanner::class;
    protected static ?int $navigationSort = 7;
    protected static ?string $navigationIcon = 'heroicon-o-play';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(3)
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                ImageColumn::make('background_image')->label('Background')->size(80),
                TextColumn::make('title')->label('Title')->searchable(),
                TextColumn::make('description')->label('Description')->limit(50),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPromoBanners::route('/'),
            'create' => Pages\CreatePromoBanner::route('/create'),
            'edit' => Pages\EditPromoBanner::route('/{record}/edit'),
        ];
    }
}
