<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?int $navigationSort = 8;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),

                TextInput::make('subtitle')
                    ->label('Subtitle')
                    ->required(),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(3)
                    ->required(),

                FileUpload::make('first_image')
                    ->label('First Image')
                    ->directory('projects')
                    ->image()
                    ->required(),

                FileUpload::make('second_image')
                    ->label('Second Image')
                    ->directory('projects')
                    ->image()
                    ->required(),

                FileUpload::make('third_image')
                    ->label('Third Image')
                    ->directory('projects')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable(),

                TextColumn::make('subtitle')
                    ->label('Subtitle')
                    ->searchable(),

                ImageColumn::make('first_image')
                    ->label('First Image')
                    ->size(80),

                ImageColumn::make('second_image')
                    ->label('Second Image')
                    ->size(80),

                ImageColumn::make('third_image')
                    ->label('Third Image')
                    ->size(80),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
