<?php
namespace App\Filament\Resources;

use App\Filament\Resources\WhyChooseUsResource\Pages;
use App\Models\WhyChooseUs;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class WhyChooseUsResource extends Resource
{
    protected static ?string $model = WhyChooseUs::class;

    protected static ?int $navigationSort = 6;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required()->label('Section Title'),
                TextInput::make('subtitle')->label('Subtitle'),
                TextInput::make('second_title')->label('Second Title'),
                Textarea::make('description')->label('Description')->rows(3),
                TextInput::make('icon')->label('Icon Class'),
                FileUpload::make('image')->label('Section Image')->directory('why_choose_us')->image(),

                // Skills Section
                TextInput::make('skill_1')->required()->label('Skill 1 Name'),
                TextInput::make('percentage_1')->required()->numeric()->minValue(0)->maxValue(100)->label('Skill 1 Percentage'),

                TextInput::make('skill_2')->required()->label('Skill 2 Name'),
                TextInput::make('percentage_2')->required()->numeric()->minValue(0)->maxValue(100)->label('Skill 2 Percentage'),

                TextInput::make('skill_3')->required()->label('Skill 3 Name'),
                TextInput::make('percentage_3')->required()->numeric()->minValue(0)->maxValue(100)->label('Skill 3 Percentage'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Title')->searchable(),
                ImageColumn::make('image')->label('Image')->size(80),
                TextColumn::make('skill_1')->label('Skill 1'),
                TextColumn::make('skill_2')->label('Skill 2'),
                TextColumn::make('skill_3')->label('Skill 3'),
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
            'index' => Pages\ListWhyChooseUs::route('/'),
            'create' => Pages\CreateWhyChooseUs::route('/create'),
            'edit' => Pages\EditWhyChooseUs::route('/{record}/edit'),
        ];
    }
}
